<?php

namespace AppBundle\Controller;

//use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CarController extends Controller
{
    /**
     * @Route("/cars", name="cars")
     */
    public function show_Cars()
    {
        // replace this example code with whatever you need
//        return new Response("Helloooooooooo :)");
        return $this->render('cars/showCars.html.twig');
    }
}
