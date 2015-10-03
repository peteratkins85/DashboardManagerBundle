<?php

namespace Cms\DashboardManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('DashboardManagerBundle:Dashboard:index.html.twig', array('pageName' => 'Dashboard'));
    }
}

