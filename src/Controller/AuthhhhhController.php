<?php
namespace App\Controller;

use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

Class AuthhhhhController extends AbstractController{
   #[Route(path:"/login",name:"home")] 
    public function loginAction():Response{
        return new Response(content: "Hello 3A36",);
    }
    #[Route(path:"/login/{id}",name:"home")] 
    public function loginActionParam($id):Response{
        return new Response(content: "Hello route param,c'est ".$id);
    }
    #[Route(path:"/login/User",name:"home2",priority:1)] 
    public function loginActionUser():Response{
        return new Response(content: "Hello route param,c'est un test");
    }
}