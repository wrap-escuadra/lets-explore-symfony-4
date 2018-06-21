<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
    	// return new Response('<html><body>hello</body></html>',Response::HTTP_OK);
        // return $this->render('welcome/index.html.twig', [
        //     'controller_name' => 'WelcomeController',
        // ]);
        return $this->render('welcome/index.html.twig');
    }

    /**
    *@Route("/hello/{name}",
    *	name="hello",
	*	requirements={"name"="[A-Za-z]+"}	
	*	)
    *
    */
    public function hello($name ="World"){
    	$data['some_variable'] =  'abc123';
    	// $data['name'] = $request->query->get('name','World');
    	$data['name'] = $name;
 
    	return $this->render('hello_page.html.twig',$data);
    }
}
