<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * 
     * @Route("hello_world")
     */
    public function world()
    {
        return new Response(
        "<html><body><h1>Ola</h1></body></html>"
        );
    }

}

?>