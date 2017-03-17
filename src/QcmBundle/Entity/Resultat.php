<?php

namespace QcmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="resultat")
 */
class Resultat
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $user;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbReponsesOK;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbQuestions;


    /**
     * @ORM\OneToOne(targetEntity="QcmBundle\Entity\Qcm" )
     */
    private $qcm;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getNbReponsesOK()
    {
        return $this->nbReponsesOK;
    }

    /**
     * @param mixed $nbReponsesOK
     */
    public function setNbReponsesOK($nbReponsesOK)
    {
        $this->nbReponsesOK = $nbReponsesOK;
    }

    /**
     * @return mixed
     */
    public function getNbQuestions()
    {
        return $this->nbQuestions;
    }

    /**
     * @param mixed $nbQuestions
     */
    public function setNbQuestions($nbQuestions)
    {
        $this->nbQuestions = $nbQuestions;
    }

    /**
     * @return mixed
     */
    public function getIdQcm()
    {
        return $this->id_Qcm;
    }

    /**
     * @param mixed $id_Qcm
     */
    public function setIdQcm($id_Qcm)
    {
        $this->id_Qcm = $id_Qcm;
    }

}