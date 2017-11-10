<?php

// src/AppBundle/Controller/UserInformationController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class UserInformationController extends Controller
{
    /**
     * @Route("/user")
     */
    public function numberAction()
    {
        return $this->render('user/information.html.twig');
    }
}