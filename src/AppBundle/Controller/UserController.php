<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class UserController extends Controller {

    /**
     * @Route("/user/index", name="user_index")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        //$users = $em->getRepository('AppBundle:User')->findAll();
        /* $res = 'Lista de usuarios: <br/>';

          foreach ($users as $user) {
          $res .= 'Usuario: ' . $user->getUsername() . ' Email: ' . $user->getEmail() . '<br/>';
          }

          return new Response($res); */

        $dql = "SELECT u FROM AppBundle:User u ORDER BY u.id DESC";
        $users = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($users, $request->query->getInt('page', 1), 3);

        return $this->render('user/index.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/user/add", name="user_add")
     */
    public function addAction() {

        $user = new User();
        $form = $this->createCreateForm($user);
        // replace this example code with whatever you need
        return $this->render('user/add.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(User $entity) {
        $form = $this->createForm(new UserType(), $entity, array('action' => $this->generateUrl('user_create'),
            'method' => 'POST'
        ));
        return $form;
    }

    /**
     * @Route("/user/create", name="user_create")
     * @Method("POST")
     */
    public function createAction(Request $request) {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $password = $form->get('password')->getData();

            $pass_constraint = new Assert\NotBlank();
            $error_list = $this->get('validator')->validate($password, $pass_constraint);
            if (count($error_list) == 0) {
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $password);
                $user->setPassword($encoded);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $successMsg = $this->get('translator')->trans('The user has been created.');
                $this->addFlash('mensaje', $successMsg);

                return $this->redirectToRoute('user_index');
            } else {
                $error_msg = new FormError($error_list[0]->getMessage());
                $form->get('password')->addError($error_msg);
            }
        }

        // replace this example code with whatever you need
        return $this->render('user/add.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/user/edit/{id}", name="user_edit")
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:User")->find($id);

        if (!$user) {
            $message = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($message);
        }

        $form = $this->createEditForm($user);

        return $this->render('user/edit.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    private function createEditForm(User $entity) {
        $form = $this->createForm(
                new UserType(), $entity, array('action' => $this->generateUrl('user_update', array('id' => $entity->getId())), 'method' => 'PUT')
        );

        return $form;
    }

    /**
     * @Route("/user/update/{id}", name="user_update")
     * @Method({"POST", "PUT"})
     */
    public function updateAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->find($id);

        if (!$user) {
            $message = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($message);
        }

        $form = $this->createEditForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();

            if (!empty($password)) {
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $password);
                $user->setPassword($encoded);
            } else {
                $recover_pass = $this->recoverPass($id);
                $user->setPassword($recover_pass[0]['password']);
            }

            if ($form->get('role')->getData() == 'ROLE_ADMIN') {
                $user->setIsActive(1);
            }

            $em->flush();
            $successMessage = $this->get('translator')->trans('The user has been modified.');
            $this->addFlash('mensaje', $successMessage);
            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    private function recoverPass($id) {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u.password FROM AppBundle:User u WHERE u.id = :id')
                ->setParameter('id', $id);

        $current_pass = $query->getResult();
        return $current_pass;
    }

    /**
     * @Route("/user/view/{id}", name="user_view")
     */
    public function viewAction($id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $user = $repository->find($id);

        if (!$user) {
            $message = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($message);
        }

        $delete_form = $this->createDeleteForm($user);

        return $this->render('user/view.html.twig', array('user' => $user, 'delete_form' => $delete_form->createView()));
    }

    private function createDeleteForm(User $entity) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_delete', array('id' => $entity->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }

    /**
     * @Route("/user/delete/{id}", name="user_delete")
     * @Method({"POST", "DELETE"})
     */
    public function deleteAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);

        if (!$user) {
            $message = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($message);
        }

        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->remove($user);
            $em->flush();

            $successMsg = $this->get('translator')->trans('The user has been deleted.');
            $this->addFlash('mensaje', $successMsg);

            return $this->redirectToRoute('user_index');
        }

    }

}
