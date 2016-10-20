<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Repository\PersonMappingRepository;


class CountController extends Controller
{
    public function countAction()
    {
          $persons = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:PersonMapping')->findCount();
        return $this->render('tradetracker/count.html.twig', array('persons' => $persons ));
    }
}
