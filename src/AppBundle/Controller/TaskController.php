<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;

class TaskController extends Controller {

    /**
     * @Route("/task/index", name="task_index")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = 'SELECT t FROM AppBundle:Task t ORDER BY t.id DESC';
        $tasks = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($tasks, $request->query->getInt('page', 1), 3);

        return $this->render('task/index.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/task/add", name="task_add")
     */
    public function addAction() {
        $task = new Task();
        $form = $this->createCreateForm($task);

        return $this->render('task/add.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Task $entity) {
        $form = $this->createForm(TaskType::class, $entity, array('action' => $this->generateUrl('task_create'),
            'method' => 'POST'
        ));
        return $form;
    }

    /**
     * @Route("/task/create", name="task_create")
     */
    public function createAction(Request $request) {
        $task = new Task();
        $form = $this->createCreateForm($task);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $task->setStatus(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $this->addFlash('mensaje', 'The task has been created.');

            return $this->redirectToRoute('task_index');
        }

        return $this->render('task/add.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/task/edit/{id}", name="task_edit")
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id);

        if (!$task) {
            throw $this->createNotFoundException('The task does not exist.');
        }

        $form = $this->createEditForm($task);

        return $this->render('task/edit.html.twig', array('task' => $task, 'form' => $form->createView()));
    }

    private function createEditForm(Task $entity) {
        $form = $this->createForm(TaskType::class, $entity, array(
            'action' => $this->generateUrl('task_update', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    /**
     * @Route("/task/update/{id}", name="task_update")
     */
    public function updateAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id);

        if (!$task) {
            throw $this->createNotFoundException('The task does not exist.');
        }

        $form = $this->createEditForm($task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setStatus(0);
            $em->flush();
            $this->addFlash('mensaje', 'The task has benn modified');

            return $this->redirectToRoute('task_edit', array('id' => $task->getId()));
        }

        return $this->render('task/edit.html.twig', array('task' => $task, 'form' => $form->createView()));
    }

    /**
     * @Route("/task/view/{id}", name="task_view")
     */
    public function viewAction($id) {
        $task = $this->getDoctrine()->getRepository('AppBundle:Task')->find($id);

        if (!$task) {
            throw $this->createNotFoundException('The task does not exist.');
        }

        $delete_form = $this->createCustomForm($task->getId(), 'DELETE', 'task_delete');

        $user = $task->getUser();

        return $this->render('task/view.html.twig', array('task' => $task, 'user' => $user, 'delete_form' => $delete_form->createView()));
    }

    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }

    /**
     * @Route("/task/delete/{id}", name="task_delete")
     * Method({"POST", "DELETE"})
     */
    public function deleteAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id);

        if (!$task) {
            throw $this->createNotFoundException('The task does not exist.');
        }

        $form = $this->createCustomForm($task->getId(), 'DELETE', 'task_delete');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->remove($task);
            $em->flush();

            $this->addFlash('mensaje', 'The task has been deleted');

            return $this->redirectToRoute('task_index');
        }
    }

    /**
     * @Route("/task/custom", name="task_custom")
     */
    public function customAction(Request $request) {
        $id_user = $this->get('security.token_storage')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $dql = 'SELECT t FROM AppBundle:Task t JOIN t.user u WHERE u.id= :idUser ORDER BY t.id DESC';
        $tasks = $em->createQuery($dql)->setParameter('idUser', $id_user);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($tasks, $request->query->getInt('page', 1), 2);

        $update_form = $this->createCustomForm(':TASK_ID', 'PUT', 'task_process');

        return $this->render('task/custom.html.twig', array('pagination' => $pagination, 'update_form' => $update_form->createView()));
    }

    /**
     * @Route("/task/process/{id}", name="task_process")
     * Method({"POST", "PUT"})
     */
    public function processAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($id);

        if (!$task) {
            throw $this->createNotFoundException('The task does not exist.');
        }

        $form = $this->createCustomForm($task->getId(), 'PUT', 'task_process');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $successMessage = $this->get('translator')->trans('The task has been processed.');
            $warningMessage = $this->get('translator')->trans('The task has already been processed.');
            if ($task->getStatus() == 0) {
                $task->setStatus(1);
                $em->flush();
                if ($request->isXmlHttpRequest()) {
                    return new Response(json_encode(array('processed' => 1, 'success' => $successMessage)), 200, array('Content-Type' => 'aplication/json'));
                }
            } else {
                if ($request->isXmlHttpRequest()) {
                    return new Response(json_encode(array('processed' => 0, 'warning' => $warningMessage)), 200, array('Content-Type' => 'aplication/json'));
                }
            }
        }
    }

}
