<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends Controller
{
  /**
  * @Route("/registro", name="login", methods={"GET"})
  */
  public function loginformulario()
  {
    $content="<h1>Registro</h1>";
    $content .= "include header.html.twig<br>";
    $content .= "Formulario de registro<br>";
    $content .= '<form method="POST"><input type="text" value="" name="user"><input type="submit"></form>';
    $content .= "footer.html.twig</p>";
    return new Response(
        '<html><body>'.$content.'</body></html>'
    );
  }
  /**
  * @Route("/registro", name="login_post", methods={"POST"})
  */
  public function login(Request $request)
  {
    $content="<h1>Registro</h1>";
    $content .= "include header.html.twig<br>";
    $content .= "//comprobaciones para añadir usuario a la base de datos<br>";
    $content .= "<strong>Usuario:</strong> ".$request->get('user') . "<br>";
    $content .= "incluir formulario";
    $content .= "footer.html.twig</p>";
    return new Response(
        '<html><body>'.$content.'</body></html>'
    );
  }

}
