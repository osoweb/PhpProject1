<?php

namespace Oso\OsoWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieDev
 */
class CategorieDev
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Oso\OsoWebBundle\Entity\Categorie
     */
    private $categorie;

    /**
     * @var \Oso\OsoWebBundle\Entity\Dev
     */
    private $dev;


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
     * Set categorie
     *
     * @param \Oso\OsoWebBundle\Entity\Categorie $categorie
     * @return CategorieDev
     */
    public function setCategorie(\Oso\OsoWebBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Oso\OsoWebBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set dev
     *
     * @param \Oso\OsoWebBundle\Entity\Dev $dev
     * @return CategorieDev
     */
    public function setDev(\Oso\OsoWebBundle\Entity\Dev $dev = null)
    {
        $this->dev = $dev;
    
        return $this;
    }

    /**
     * Get dev
     *
     * @return \Oso\OsoWebBundle\Entity\Dev 
     */
    public function getDev()
    {
        return $this->dev;
    }
}
