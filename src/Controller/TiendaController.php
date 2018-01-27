<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TiendaController extends Controller
{
  /**
    * @Route("/", name="tienda_index")
    */
    public function index()
    {
        return new Response('<h1>Indice de la Tienda</h1>');
    }
    /**
    * @Route("/categoria/{entryName}/{entryId}/{page}", name="categoria_show",
    * requirements={"entryId":"\d+","page":"\d+"}, defaults={"page"=1})
    */
    public function showCategoria($entryName,$entryId,$page)
    {
      $content = "<p>Categoria $entryName: $entryId</p>";
      $content .= "<p>Página : $page";
      return new Response(
          '<html><body>'.$content.'</body></html>'
      );
    }    
}
?>
