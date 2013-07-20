<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadSiteData
 *
 * @author dro
 */

// src/Oso/OsoWebBundle/DataFixtures/ORM/LoadSiteData.php
namespace Oso\OsoWebBundle\DataFixtures\ORM;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Oso\OsoWebBundle\Entity\Site;

class LoadSiteData extends AbstractFixture implements OrderedFixtureInterface
{
    
public function load(ObjectManager $em)
{
$site_direct_reduc = new Site();
$site_direct_reduc->setCategorie($em->merge($this->getReference('categorie-developpement')));
$site_direct_reduc->setType('freelance');
$site_direct_reduc->setLogo('sensio-labs.gif');
$site_direct_reduc->setUrl('http://www.DirectReduc.com/');
$site_direct_reduc->setFonction('Web Developer');
$site_direct_reduc->setLocation('Paris, France');
$site_direct_reduc->setDescription('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
$site_direct_reduc->setToken('DirectReduc.com');
$site_direct_reduc->setIsPublic(true);
$site_direct_reduc->setIsActivated(true);
$site_direct_reduc->setEmail('moi@direct.com');
$site_direct_reduc->setCreatedAt(new \DateTime('2012-10-10'));
$site_direct_reduc->setUpdatedAt(new \DateTime('2012-10-10'));

$site_osoweb = new Site();
$site_osoweb->setCategorie($em->merge($this->getReference('categorie-systemes')));
$site_osoweb->setType('freelance');
$site_osoweb->setLogo('extreme-sensio.gif');
$site_osoweb->setUrl('smtp.osoweb.com/');
$site_osoweb->setFonction('Technicien Réseaux');
$site_osoweb->setLocation('Lille, France');
$site_osoweb->setDescription('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
$site_osoweb->setToken('osoweb.fr');
$site_osoweb->setIsPublic(true);
$site_osoweb->setIsActivated(true);
$site_osoweb->setEmail('contact@osoweb.fr');
$site_osoweb->setCreatedAt(new \DateTime('2013-01-10'));
$site_osoweb->setUpdatedAt(new \DateTime('2013-05-10'));

 $em->persist($site_direct_reduc);
$em->persist($site_osoweb);
$em->flush();
}

 public function getOrder()
{
return 2; // the order in which fixtures will be loaded
}

}

?>
