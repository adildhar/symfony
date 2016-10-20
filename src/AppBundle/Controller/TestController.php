<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Person;
use AppBundle\Document\PersonMapping;

class TestController extends Controller
{
    /**
     * @Route("/test")
     */
    public function generateRecords()
    {   
        $person = new Person();
        $get_Age = mt_rand(0, 90);
        $get_Fname = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
        $get_Lname = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
        $person->setFirstName($get_Fname);
        $person->setLastName($get_Lname);
        $person->setPersonAge($get_Age);
        $em = $this->getDoctrine()->getManager();
        $em->persist($person);
        $em->flush();
        $persons = $em->getRepository('AppBundle:Person')->findAll();
        return $this->render('tradetracker/test.html.twig', array('persons' => $persons ));
     }
}