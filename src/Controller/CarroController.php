<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CarroController extends Controller
{
  /**
  * @Route("/carro", name="carro_show")
  */
  public function show()
  {
    $content="<h1>Carro</h1>";
    $urlCanonical = "<p>recoger variable url canonica";
    $content .= "include header.html.twig<br>";
    $content .= "include ventanaModal.html.twig<br>";
    $content .= "include carro.html.twig<br>";
    $content .= "cargar modalIframeProducto.js<br>";
    $content .= "include footer.html.twig</p>";
    return new Response(
        '<html><body>'.$content.'</body></html>'
    );
  }
  /**
    * @Route("/carro/add/{entryId}/{entryQuantity}", name="carro_add",
    * requirements={"entryId":"\d+", "entryQuantity":"\d+"})
    */
    public function add($entryId,$entryQuantity)
    {
      $content="<h1>Producto : $entryId, $entryQuantity uds</h1>";
      $content .= "llamar a la función para añadir a la sesión";
      return new Response(
          '<html><body>'.$content.'</body></html>'
      );
    }
    /**
      * @Route("/carro/delete/{entryId}", name="carro_delete",
      * requirements={"entryId":"\d+"})
      */
      public function delete($entryId)
      {
        $content="<h1>Quitar el producto $entryId</h1>";
        $content .= "llamar a la función para eliminar el producto de la sesión";
        return new Response(
            '<html><body>'.$content.'</body></html>'
        );
      }
      /**
        * @Route("/carro/empty", name="carro_empty")
        */
        public function emptyCarro()//No se puede utilizar nombre empty para el metodo
        {
          $content="<h1>Vaciar el carrito</h1>";
          $content .= "llamar a la función para vaciar la sesión";
          return new Response(
              '<html><body>'.$content.'</body></html>'
          );
        }

}
