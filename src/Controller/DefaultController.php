<?php
/**
 * Created by PhpStorm.
 * User: dangis
 * Date: 18.5.17
 * Time: 17.06
 */

namespace App\Controller;

use App\Service\DativeConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        $name = "Oleg";
        $dative = $this->container->get(DativeConverter::class)->convert($name);
        return new Response($name . "<span id='red'>=></span>" . $dative);
    }
}
