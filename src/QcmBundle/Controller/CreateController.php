<?php

namespace QcmBundle\Controller;


use QcmBundle\Entity\Qcm;
use QcmBundle\Entity\Question;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateController extends Controller
{

    /**
     * @Route("/",name="qcmCreate_index")
     */
    public function indexAction(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return $this->render('QcmBundle:Create:index.html.twig');
        }
        else if($request->isMethod('POST'))
        {
            return new Response("POST");
        }
    }

}
