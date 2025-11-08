<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{ 
    //#[Route(path:'/index/{name}',name:'app_home',requirements :['name'=>'\d+'])]
    public function php (int $name=1 ):Response
    {
        return new Response (content:"Hello".$name."!");
    }


    //#[Route(path:'/index/{name}',name:'app_home')]
    public function home(string $name="Anonymous"):Response
    {
        return new Response (content:"Hello".$name."!");
    }

    //#[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
  //#[Route('/welcome', name: 'app_welcome')]
    public function welcome(): Response
    {
        return new Response("hello world");
      
    }//#[Route('/hello/{name}')]
    public function helloUtil(string $name): Response
    {
        return new Response("hello ".$name);
    } 
}

