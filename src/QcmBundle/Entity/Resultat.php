<?php

namespace QcmBundle\Resultat;

class Resultat
{
    private $id;
    private $user;
    private $nbReponsesOK;
    private $nbQuestions;
    private $id_Qcm;

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