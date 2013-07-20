<?php
// src/Oso/UserBundle/Entity/User.php
 
namespace Oso\UserBundle\Entity;
 
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="osoweb")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  // Ajoutez vos attributs ici, un attribut *location* de type *text* pour notre exemple :
 // /**
 //    * @ORM\Column(type="text")
 //    */
 //   protected $location;

}