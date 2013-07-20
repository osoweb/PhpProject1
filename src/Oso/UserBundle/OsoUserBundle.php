<?php
// src/Oso/UserBundle/OsoUserBundle.php
 
namespace Oso\UserBundle;
 
use Symfony\Component\HttpKernel\Bundle\Bundle;
 
class OsoUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}