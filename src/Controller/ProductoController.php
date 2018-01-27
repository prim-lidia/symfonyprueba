<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends Controller
{
  /**
  * @Route("/producto/{entryName}/{entryId}/", name="producto_show",
  * requirements={"entryId":"\d+"})
  */
  public function show($entryName,$entryId)
  {
    $content="<h1>Producto: $entryId</h1>";
    $content .= "include header.html.twig<br>";
    $content .= "include ventanaModal.html.twig<br>";
    $content .= "include producto.html.twig<br>";
    $content .= "incluir relacionados<br>";
    $content .= "cargar modalDomProducto.js y loadProducto.js<br>";
    $content .= "footer.html.twig</p>";
    return new Response(
        '<html><body>'.$content.'</body></html>'
    );
  }
  /**
    * @Route("/producto/{entryName}/{entryId}/popup", name="producto_popup",
    * requirements={"entryId":"\d+"}),
    * methods={"GET","HEAD"})
    */
    public function popup($entryId)
    {
      $content="<h1>Producto: $entryId</h1>";
      $urlCanonical = "<p>recoger variable url canonica";
      $content .= "include header-popup.html.twig<br>";
      $content .= "include producto.html.twig<br>";
      $content .= "footer-popup.html.twig</p>";
      return new Response(
          '<html><body>'.$content.'</body></html>'
      );
    }
    /**
      * @Route("/producto/{entryName}/{entryId}/json", name="producto_json",
      * requirements={"entryId":"\d+"}),
      * methods={"GET","HEAD"})
      */
      public function productoJson($entryId)
      {
        $content="<h1>Producto: $entryId</h1>";
        $content .= "devolver json";
        return new Response(
            '<html><body>'.$content.'</body></html>'
        );
      }
}
