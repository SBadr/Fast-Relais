<?php

namespace App\AppBundle\Entity;

/**
 * Evaluation
 */
class Evaluation
{
    /**
     * @var integer
     */
    private $note;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \App\AppBundle\Entity\Livraison
     */
    private $livraison;

    /**
     * @var \App\UserBundle\Entity\User
     */
    private $destinataire;

    /**
     * @var \App\UserBundle\Entity\User
     */
    private $auteur;


    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Evaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Evaluation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Evaluation
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Evaluation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
     * Set livraison
     *
     * @param \App\AppBundle\Entity\Livraison $livraison
     *
     * @return Evaluation
     */
    public function setLivraison(\App\AppBundle\Entity\Livraison $livraison = null)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return \App\AppBundle\Entity\Livraison
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set destinataire
     *
     * @param \App\UserBundle\Entity\User $destinataire
     *
     * @return Evaluation
     */
    public function setDestinataire(\App\UserBundle\Entity\User $destinataire = null)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return \App\UserBundle\Entity\User
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set auteur
     *
     * @param \App\UserBundle\Entity\User $auteur
     *
     * @return Evaluation
     */
    public function setAuteur(\App\UserBundle\Entity\User $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \App\UserBundle\Entity\User
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}

