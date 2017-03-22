<?php

namespace QcmBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AnswerController extends Controller
{

    /**
     * @Route("/",name="qcmAnswer_index")
     */
    public function indexAction()
    {
        $qcmRepository = $this->getDoctrine()->getManager()->getRepository('QcmBundle:Qcm');
        $listqcm = $qcmRepository->findBy(array(), array('titre' => 'ASC'));
        return $this->render('QcmBundle:Answer:index.html.twig',array('listqcm'=>$listqcm));
    }

    /**
     * @Route("/renseigner/{id}",name="qcmAnswerrenseigner_index")
     */
    public function renseignerAction(Request $request,$id)
    {
        $qcmRepository = $this->getDoctrine()->getManager()->getRepository('QcmBundle:Question')->findBy(['qcm'=>$id]);
        $qcm = $qcmRepository;

        return $this->render('QcmBundle:Answer:renseigner.html.twig',array('qcm'=>$qcm));
    }
}
