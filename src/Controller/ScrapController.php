<?php
namespace App\Controller;

use App\Entity\Key;
use App\Entity\Scraps;
use App\Entity\Link;
use App\Entity\Theme;

// use App\Form\StockRegisterType;
// use App\Form\PictureRegisterType;
// use App\Form\ProductRegisterType;
// use App\Form\QuantityGrRegisterType;

// use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Console\Logger\ConsoleLogger;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

include __DIR__ . '/../../assets/variable.php';
class ScrapController extends AbstractController
{
    /**
     * @Route ("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('app/index.html.twig', [
            'titreSite' => $_SESSION['titre'],
            // 'titreSite' => $titreSite,
            'text' => "...????",
            'controller_name' => 'ScrapController',
        ]);
    }

    /**
     * @Route("/readscrap", name="readscrap")
     */
    public function readScrap(Request $request)
    // public function readScrap()
    {
        $scrap = $this->getDoctrine()->getManager()->getRepository(Scraps::class)->findBy([], ['id'=>'DESC']);
        // $theme = $this->getDoctrine()->getManager()->getRepository(Theme::class)->findBy([], ['name'=>'ASC']);
        // $link = $this->getDoctrine()->getManager()->getRepository(Link::class)->findBy([],['name' => 'ASC']);
        // $key = $this->getDoctrine()->getManager()->getRepository(Key::class)->findBy([],['name' => 'ASC']);
        
        // $places = $this->getDoctrine()->getManager()->getRepository(Places::class)->findAll();
        // $stock = $this->getDoctrine()->getManager()>getRepository(Stock::class)->findAll();
        // $picture = $this->getDoctrine()->getManager()->getRepository(PictureProduct::class)->findAll();

 
        return $this->render('scrap/read.html.twig', [
            'titreSite' => $_SESSION['titre'],
            'scrap' => $scrap,
            // 'theme' => $theme,
            // 'link' => $link,
            // 'key' => $key,
        ]);
    }

    // /**
    //  * @Route("/deleteS/{id}", name="deleteScrap")
    //  */
    // public function deleteScrap()
    // /**
    //  * @Route("/deleteP/{id}", name="deleteProduct")
    //  */
    // public function deleteProduct(Product $products, Request $request)
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $em->remove($products);
    //     $em->flush();

    //     $request->getSession()
    //         ->getFlashBag()
    //         ->add('action', 'Suppression réussi');
    //     return $this->render('app/message.html.twig');
    // }


    /**
     * @Route("/readscrapdetail/{id}", name="readscrapdetail")
     */
    public function readScrapDetail(scraps $scraps)
    {
        $scrap = $this->getDoctrine()->getManager()->getRepository(Scraps::class)->findById($scraps);
        // $theme = $this->getDoctrine()->getManager()->getRepository(Theme::class)->findBy([], ['name'=>'ASC']);
        // $link = $this->getDoctrine()->getManager()->getRepository(Link::class)->findBy([],['name' => 'ASC']);
        // $key = $this->getDoctrine()->getManager()->getRepository(key::class)->findBy([],['name' => 'ASC']);
        
        // $places = $this->getDoctrine()->getManager()->getRepository(Places::class)->findAll();
        // $stock = $this->getDoctrine()->getManager()>getRepository(Stock::class)->findAll();
        // $picture = $this->getDoctrine()->getManager()->getRepository(PictureProduct::class)->findAll();

 
        return $this->render('scrap/readDetail.html.twig', [
            'titreSite' => $_SESSION['titre'],
            'scrap' => $scrap,
            // 'theme' => $theme,
            // 'link' => $link,
            // 'key' => $key,
        ]);
    }
}