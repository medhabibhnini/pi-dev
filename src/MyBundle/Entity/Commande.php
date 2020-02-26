<?php

namespace MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="fk_livre", columns={"idlivre"}), @ORM\Index(name="fk_usercommande", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="BibliothequeBundle\Repository\BibliothequeRepository")
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Livre
     *
     * @ORM\ManyToOne(targetEntity="Livre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlivre", referencedColumnName="idlivre")
     * })
     */
    private $idlivre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecommande", type="date", nullable=true)
     */
    private $datecommande;

    /**
     * @var integer
     * @ORM\Column(name="commandepaye", type="integer", nullable=true)
     */
    private $commandepaye;

    /**
     * @return int
     */
    public function getCommandepaye()
    {
        return $this->commandepaye;
    }

    /**
     * @param int $commandepaye
     */
    public function setCommandepaye($commandepaye)
    {
        $this->commandepaye = $commandepaye;
    }



    /**
     * @return \DateTime
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * @param \DateTime $datecommande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;
    }



    /**
     * Get idcommande
     *
     * @return integer
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set idUser
     *
     * @param \MyBundle\Entity\User $idUser
     *
     * @return Commande
     */
    public function setIdUser(\MyBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \MyBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idlivre
     *
     * @param \MyBundle\Entity\Livre $idlivre
     *
     * @return Commande
     */
    public function setIdlivre(\MyBundle\Entity\Livre $idlivre = null)
    {
        $this->idlivre = $idlivre;

        return $this;
    }

    /**
     * Get idlivre
     *
     * @return \MyBundle\Entity\Livre
     */
    public function getIdlivre()
    {
        return $this->idlivre;
    }
}
