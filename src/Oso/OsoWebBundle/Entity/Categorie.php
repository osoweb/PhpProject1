<?php

namespace Oso\OsoWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sites;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categorie_devs;

    public function __toString()
{
return $this->getNom();
}
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categorie_devs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add sites
     *
     * @param \Oso\OsoWebBundle\Entity\Site $sites
     * @return Categorie
     */
    public function addSite(\Oso\OsoWebBundle\Entity\Site $sites)
    {
        $this->sites[] = $sites;
    
        return $this;
    }

    /**
     * Remove sites
     *
     * @param \Oso\OsoWebBundle\Entity\Site $sites
     */
    public function removeSite(\Oso\OsoWebBundle\Entity\Site $sites)
    {
        $this->sites->removeElement($sites);
    }

    /**
     * Get sites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Add categorie_devs
     *
     * @param \Oso\OsoWebBundle\Entity\CategorieDev $categorieDevs
     * @return Categorie
     */
    public function addCategorieDev(\Oso\OsoWebBundle\Entity\CategorieDev $categorieDevs)
    {
        $this->categorie_devs[] = $categorieDevs;
    
        return $this;
    }

    /**
     * Remove categorie_devs
     *
     * @param \Oso\OsoWebBundle\Entity\CategorieDev $categorieDevs
     */
    public function removeCategorieDev(\Oso\OsoWebBundle\Entity\CategorieDev $categorieDevs)
    {
        $this->categorie_devs->removeElement($categorieDevs);
    }

    /**
     * Get categorie_devs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategorieDevs()
    {
        return $this->categorie_devs;
    }
}
