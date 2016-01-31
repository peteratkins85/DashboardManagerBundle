<?php

namespace Oni\DashboardManagerBundle\Controller;

use Oni\CoreBundle\Controller\CoreController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class DashboardController extends CoreController
{

      private $pageName = 'Dashboard';


    public function __construct()
    {


    }

    public function indexAction()
    {

        $session = new Session();

        return $this->render('DashboardManagerBundle:Dashboard:index.html.twig',
            array(
                'pageName' => $this->pageName
            )
        );
    }
}

