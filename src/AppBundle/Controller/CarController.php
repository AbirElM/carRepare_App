<?php

namespace AppBundle\Controller;

//use http\Env\Response;
use AppBundle\Entity\Car;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CarController extends Controller
{
    /**
     * @Route("/add_car")
     * @param Request $request
     * @return Response
     */
    public function add_Cars(Request $request)
    {
        $car = new Car();
        $form = $this->createForm('AppBundle\Form\CarType',$car);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($car);
            $em->flush($car);

        }

        return $this->render('cars/addCar.html.twig', array(
            'form'=>$form->createView(),
            'car'=>$car
        ));
    }
}
