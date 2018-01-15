<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/* use Symfony\Component\Validator\Constraints as Assert;
  use Symfony\Component\Form\FormError;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; */
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
        ;
    }

    /**
     * @Route("/task/edit/{id}", name="task_edit")
     */
    public function editAction(Request $request) {
        
    }

    /**
     * @Route("/task/update/{id}", name="task_update")
     */
    public function updateAction(Request $request) {
        
    }

    /**
     * @Route("/task/view/{id}", name="task_view")
     */
    public function viewAction(Request $request) {
        
    }

    /**
     * @Route("/task/delete/{id}", name="task_delete")
     * Method({"POST", "DELETE"})
     */
    public function deleteAction(Request $request) {
        
    }

    /**
     * @Route("/task/custom", name="task_custom")
     */
    public function customAction(Request $request) {
        
    }

    /**
     * @Route("/task/process/{id}", name="task_process")
     * Method({"POST", "PUT"})
     */
    public function processAction(Request $request) {
        
    }

}
