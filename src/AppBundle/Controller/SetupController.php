<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class SetupController extends Controller
{
    /**
     * @Route("/setup")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('tradetracker/setup.html.twig', array(
            'number' => $number,
        ));

    }
}
