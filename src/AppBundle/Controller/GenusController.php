<?php


namespace AppBundle\Controller;


//use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/*class GenusController extends Controller
{
    public function showAction( )
    {

        /**
         * @Route("/genus")
         */
        /* Creating route */

     //   return new Response("Under the sea ! ");
      /*  return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
/*
    }
}*/

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}", name="genus")
     */
    public function indexAction($genusName)
    {
// replace this example code with whatever you need

//  $templating = $this->container->get('templ');



/*    return new Response("<html>

<h1> Bonjour dqkdqdjqkdjqk ! </h1>
<body>  The genus iiiiiiiiiiiiiiis : $genusName </body>
");*/
        $notes = [
            'Octupus asked me a riddle, outsmarted me ',
            'I counted 8 legs as they wrapped around me',
            'Inked !'
        ];

        $template = $this->renderView('genus/show.html.twig',['name'=> $genusName, 'notes'=> $notes]);
        return new Response($template);
    }
}