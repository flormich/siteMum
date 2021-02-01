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
            'text' => $_SESSION['titreConnexion'],
            'controler_name' => 'AppController',
        ]);
    }


    /**
     * @Route ("/loginOk", name="loginOk")
     */
    public function loginOk(): Response
    {
        if ($_POST['pseudo'] == "Florian" && $_POST['pwd'] == "0000"){
        return $this->render('app/essaiConnexion.html.twig', [
            'titreSite' => $_SESSION['titre'],
            'titreConnexion' => 'Connexion réussie',
            'pseudo' => $_POST['pseudo'],
            'pwd' => $_POST['pwd'],
            'text' => 'Votre peuso est : ',
            'textpwd' => 'Votre passeword est : ',
            'controler_name' => 'AppController',
        ]);
        }
        else {
            return $this->render('app/essaiConnexion.html.twig', [
                'titreSite' => $_SESSION['titre'],
                'titreConnexion' => 'Echec de la connexion',
                'pseudo' => '',
                'pwd' => $_POST['pwd'],
                'text' => '',
                'textpwd' => '',
                'controler_name' => 'AppController',
            ]);
        }
    }
}