<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/cambiar/passw', name: 'app_change_passw')]
    public function passw(): Response
    {
        return $this->renderForm('registration/password.html.twig');
    }

    #[Route('/cambiar/p', name: 'app_change_passw_post', methods: ['POST'])]
    public function busqueda(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserRepository $user): Response
    {
        $actual = $request->get('actual');
        $nueva = $request->get('nueva');
        $repite = $request->get('repite');

        if ($nueva != $repite) {
            $this->addFlash(
                'notice',
                'La nueva contraseña no coincide!'
            );
            return $this->redirectToRoute('app_change_passw');
        }

        $passw = $this->getUser()->getPassword();

        if (!$userPasswordHasher->isPasswordValid($this->getUser(), $actual)) {
            $this->addFlash(
                'notice',
                'Su contraseña actual no es válida!'
            );
            return $this->redirectToRoute('app_change_passw');
        }

        $user->upgradePassword($this->getUser(), $userPasswordHasher->hashPassword(
            $this->getUser(),
            $nueva
        ));

        $this->addFlash(
            'notice',
            'Su contraseña ha sido cambiada con éxito!'
        );
        return $this->redirectToRoute('app_change_passw');
    }
}
