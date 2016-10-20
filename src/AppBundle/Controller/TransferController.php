<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Repository\PersonMappingRepository;
use AppBundle\Document\PersonMapping;

class TransferController extends Controller
{
    public function moveAction()
    {
        $em = $this->getDoctrine()->getManager();
        $personsdb = $em->getRepository('AppBundle:Person')->findAll();
   		foreach($personsdb as $person)
   		{	
    	$get_Fname =  $person->getFirstName();
    	$get_Lname =  $person->getLastName();
    	$get_Age = $person->getPersonAge();
        $personMap = new PersonMapping();
        $personMap->setFirstName($get_Fname);
        $personMap->setLastName($get_Lname);
        $personMap->setPersonAge($get_Age);
    	$dm = $this->get('doctrine_mongodb')->getManager();
    	$dm->persist($personMap);
    	$dm->flush();
        }
        $persons = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:PersonMapping')->getPersonInfo();
        return $this->render('tradetracker/move.html.twig', array('persons' => $persons ));
	}
}
