<?php

namespace QcmBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreateController extends Controller
{

    /**
     * @Route("/",name="qcmCreate_index")
     */
    public function indexAction()
    {
        return $this->render('QcmBundle:Create:index.html.twig');
    }

}
