<?php

namespace QcmBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResultsController extends Controller
{

    /**
     * @Route("/",name="qcmResults_index")
     */
    public function indexAction()
    {
        return $this->render('QcmBundle:Results:index.html.twig');
    }

}
