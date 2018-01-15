<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller {

    /**
     * @Route("/", name="user_homepage")
     */
    public function homeAction(Request $request) {
        return $this->render('user/home.html.twig');
        }

    /**
     * @Route("/login", name="user_login")
     */
    public function loginAction(Request $request) {
        $authentication_utils = $this->get('security.authentication_utils');
        $error = $authentication_utils->getLastAuthenticationError();
        $last_username = $authentication_utils->getLastUsername();

        return $this->render('security/login.html.twig', array('last_username' => $last_username, 'error' => $error));
    }

    /**
     * @Route("/login_check", name="user_login_check")
     */
    public function loginCheckAction(Request $request) {
        
    }

    /**
     * @Route("/logout", name="user_logout")
     */
    public function logoutAction(Request $request) {
        
    }

}
