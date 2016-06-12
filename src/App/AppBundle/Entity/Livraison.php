<?php

namespace App\AppBundle\Entity;

/**
 * Livraison
 */
class Livraison
{
    /**
     * @var integer
     */
    private $internaute;

    /**
     * @var \DateTime
     */
    private $datelivraison;

    /**
     * @var \DateTime
     */
    private $datereception;

    /**
     * @var integer
     */
    private $statut;

    /**
     * @var integer
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \App\AppBundle\Entity\Colis
     */
    private $colis;

    /**
     * @var \App\AppBundle\Entity\Fastrelais
     */
    private $fastrelais;


    /**
     * Set internaute
     *
     * @param integer $internaute
     *
     * @return Livraison
     */
    public function setInternaute($internaute)
    {
        $this->internaute = $internaute;

        return $this;
    }

    /**
     * Get internaute
     *
     * @return integer
     */
    public function getInternaute()
    {
        return $this->internaute;
    }

    /**
     * Set datelivraison
     *
     * @param \DateTime $datelivraison
     *
     * @return Livraison
     */
    public function setDatelivraison($datelivraison)
    {
        $this->datelivraison = $datelivraison;

        return $this;
    }

    /**
     * Get datelivraison
     *
     * @return \DateTime
     */
    public function getDatelivraison()
    {
        return $this->datelivraison;
    }

    /**
     * Set datereception
     *
     * @param \DateTime $datereception
     *
     * @return Livraison
     */
    public function setDatereception($datereception)
    {
        $this->datereception = $datereception;

        return $this;
    }

    /**
     * Get datereception
     *
     * @return \DateTime
     */
    public function getDatereception()
    {
        return $this->datereception;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return Livraison
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return Livraison
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

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
     * Set colis
     *
     * @param \App\AppBundle\Entity\Colis $colis
     *
     * @return Livraison
     */
    public function setColis(\App\AppBundle\Entity\Colis $colis = null)
    {
        $this->colis = $colis;

        return $this;
    }

    /**
     * Get colis
     *
     * @return \App\AppBundle\Entity\Colis
     */
    public function getColis()
    {
        return $this->colis;
    }

    /**
     * Set fastrelais
     *
     * @param \App\AppBundle\Entity\Fastrelais $fastrelais
     *
     * @return Livraison
     */
    public function setFastrelais(\App\AppBundle\Entity\Fastrelais $fastrelais = null)
    {
        $this->fastrelais = $fastrelais;

        return $this;
    }

    /**
     * Get fastrelais
     *
     * @return \App\AppBundle\Entity\Fastrelais
     */
    public function getFastrelais()
    {
        return $this->fastrelais;
    }
}

