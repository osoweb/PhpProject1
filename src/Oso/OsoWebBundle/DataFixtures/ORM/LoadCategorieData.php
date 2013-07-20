<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadCategorieData
 *
 * @author dro
 */
// src/Oso/OsoWebBundle/DataFixtures/ORM/LoadCategorieData.php
namespace Oso\OsoWebBundle\DataFixtures\ORM;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Oso\OsoWebBundle\Entity\Categorie;
class LoadCategorieData extends AbstractFixture implements OrderedFixtureInterface
{
   
 public function load(ObjectManager $em) 
    {
$support = new Categorie();
$support->setNom('Support/Maintenance');

$developpement = new Categorie();
$developpement->setNom('Etude/Développement');

$systemes = new Categorie();
$systemes->setNom('Systèmes/Réseaux');

$exploitation = new Categorie();
$exploitation->setNom('Production/Exploitation');

$em->persist($support);
$em->persist($developpement);
$em->persist($systemes);
$em->persist($exploitation);
$em->flush();
$this->addReference('categorie-support', $support);
$this->addReference('categorie-developpement', $developpement);
$this->addReference('categorie-systemes', $systemes);
$this->addReference('categorie-exploitation', $exploitation);   
    

 }    
   
 public function getOrder() 
 {
     return 1; // the order in which fixtures will be loaded
 }       
    
 
 }

?>
