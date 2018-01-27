<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class BlogController extends Controller
{
    /**
    * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"}, defaults={"page"=1})
    */
    public function list($page)
    {
      return $this->file('../static/hola.txt', 'hola.txt', ResponseHeaderBag::DISPOSITION_INLINE);
      return $this->file('../static/hola.txt');
      throw $this->createNotFoundException('El producto no existe');
      return $this->redirectToRoute('lucky_number');
      $content = "Pagína $page: <ul>";
      for($i = 1; $i <= 10; $i++){
        $content .= "<li>Entrada $i </li>";
      }
      $content .= "</ul>";
        return new Response(
            "<html><body>$content</body></html>"
        );
    }
    /**
    * @Route("/blog/{entryName}", name="blog_show")
    */
    public function show($entryName)
    {
        $url = $this->generateUrl(
          'blog_show',
          array('entryName' => $entryName)
        );
        return new Response(
            '<html><body>Entrada ' . $entryName . ' url: ' . $url . '</body></html>'
        );
    }
    /**
    * @Route("/blog/{entryName}/{entryId}", name="blog_show_by_id")
    */
    public function showById($entryId)
    {
      $url = $this->generateUrl('blog_list', array(
          'page' => 2,
          'category' => 'Symfony',
        ), UrlGeneratorInterface::ABSOLUTE_URL);

        return new Response(
          '<html><body>Entrada ' . $entryId . ' Categoria:'.$url.'</body></html>'
        );
    }
}
?>
