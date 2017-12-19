<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/user/add", name="add")
     */
    public function addAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
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
