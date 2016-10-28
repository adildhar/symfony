<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class TakedownController extends Controller
{
    /**
     * @Route("/takedown")
     */
    public function takeAction()
    {
    $response = new StreamedResponse();
    $process = new Process('/home/ubuntu/elb-remove');
    $response->setCallback(function() use ($process) {
        $process->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                echo 'ERR > '.$buffer;
            } else {
                echo '<br>';
                echo '>>> '.$buffer;
                echo '<br>';
            }
        });
    });
        $response->setStatusCode(200);
        return $response;
    }    
}
