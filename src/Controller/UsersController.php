<?php

namespace App\Controller;

use App\Entity\Key;
use App\Entity\Scraps;
use App\Entity\Link;
use App\Entity\Theme;
use App\Entity\Users;

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

class UsersController extends AbstractController
{
    /**
     * @Route("/UsersView", name="UsersView")
     */
    public function ReadUsers(Request $request): Response
    {
        $user = $this->getDoctrine()->getManager()->getRepository(Users::class)->findAll();
        return $this->render('users/readUsers.html.twig', [
            'titreSite' => $_SESSION['titre'],
            'user' => $user,
        ]);
    }
}
