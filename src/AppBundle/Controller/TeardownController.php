<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class TeardownController extends Controller
{
   /**
     * @Route("/teardown")
     */
    public function tearAction()
    {
    $response = new StreamedResponse();
    $process = new Process('/home/ubuntu/ec2-terminate');
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
