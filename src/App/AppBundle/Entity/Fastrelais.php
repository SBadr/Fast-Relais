<?php

namespace App\AppBundle\Entity;

/**
 * Fastrelais
 */
class Fastrelais implements FonctionInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \App\UserBundle\Entity\User
     */
    private $user;


    /**
     * @var array
     *
     * @ORM\Column(name="mesDisponibilites", type="array")
     */
    private $mesDisponibilites;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \App\UserBundle\Entity\User $user
     *
     * @return Fastrelais
     */
    public function setUser(\App\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Get mesDisponibilites
     *
     * @return array
     */
    function getMesDisponibilites() {
        return $this->mesDisponibilites;
    }

    
    /**
     * Set mesDisponibilites
     *
     * @param array $mesDisponibilites
     *
     * @return Fastrelais
     */
    function setMesDisponibilites($mesDisponibilites) {
        $this->mesDisponibilites = $mesDisponibilites;
    }


}

