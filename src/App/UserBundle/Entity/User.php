<?php
// src/AppBundle/Entity/User.php

namespace App\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    protected $nom;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    protected $prenom;
    
    
    /**
     * @var date
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    protected $dateNaissance;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    protected $adresse;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20)
     *
     */
    protected $telephone;
    
    
    /**
     * @var array
     */
    protected $mesEvaluations;
    
    
    public function __construct()
    {
        parent::__construct();
        $this->roles = array('ROLE_USER');
    }
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getMesEvaluations() {
        return $this->mesEvaluations;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDateNaissance(date $dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setMesEvaluations($mesEvaluations) {
        $this->mesEvaluations = $mesEvaluations;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }


}