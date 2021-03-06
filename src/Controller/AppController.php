<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AppController extends AbstractController{

  public function login(AuthenticationUtils $authenticationUtils): Response{
    // if ($this->getUser()) {
    //     return $this->redirectToRoute('target_path');
    // }

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();
    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();
    return $this->render('app/login.html.twig', [
      'error' => $error,
      'last_username' => $lastUsername
    ]);
  }

  public function logout(): void{
    throw new \LogicException(
      'This method can be blank - it will be intercepted by the logout key on your firewall.'
    );
  }
}
