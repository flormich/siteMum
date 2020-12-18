<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

include __DIR__ . '/../../assets/variable.php';
// session_start();

class AppController extends AbstractController
{
    /**
     * @Route ("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('app/index.html.twig', [
            'titreSite' => $_SESSION['titre'],
            // 'titreSite' => $titreSite,
            'text' => "...????",
            'controller_name' => 'AppController',
        ]);
    }

    /**
     * @Route ("/loginConnex", name="login")
     */
    public function login(): Response
    {
        return $this->render('app/login.html.twig', [
            'titreSite' => $_SESSION['titre'],
            'text' => 'Je suis dans login',
            'controler_name' => 'AppController',
        ]);
    }
}