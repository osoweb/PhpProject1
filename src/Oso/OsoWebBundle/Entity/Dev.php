<?php

namespace Oso\OsoWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dev
 */
class Dev
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categorie_devs;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set url
     *
     * @param string $url
     * @return Dev
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Dev
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Dev
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Dev
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Add categorie_devs
     *
     * @param \Oso\OsoWebBundle\Entity\CategorieDev $categorieDevs
     * @return Dev
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
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }
}
