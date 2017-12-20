<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class UserController extends Controller {

    /**
     * @Route("/user/index", name="user_index")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        /* $res = 'Lista de usuarios: <br/>';

          foreach ($users as $user) {
          $res .= 'Usuario: ' . $user->getUsername() . ' Email: ' . $user->getEmail() . '<br/>';
          }

          return new Response($res); */
        return $this->render('user/index.html.twig', array('users' => $users));
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
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user,$password);
            $user->setPassword($encoded);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_index');
        }

        // replace this example code with whatever you need
        return $this->render('user/add.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/user/edit/{id}", name="edit")
     */
    public function editAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/user/view/{id}", name="view")
     */
    public function viewAction($id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $user = $repository->find($id);
        return new Response('Usuario: ' . $user->getUsername() . ' Email: ' . $user->getEmail());
    }

}
