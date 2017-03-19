<?php

namespace QcmBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnswerController extends Controller
{

    /**
     * @Route("/",name="qcmAnswer_index")
     */
    public function indexAction()
    {
        return $this->render('QcmBundle:Answer:index.html.twig');
    }

}
