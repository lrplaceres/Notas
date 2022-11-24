<?php

namespace App\Controller;

use App\Entity\Nota;
use App\Form\NotaType;
use App\Repository\NotaRepository;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class NotaController extends AbstractController
{
    private $em;

    /**
     * param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/nota', name: 'app_nota')]
    public function index(NotaRepository $nota): Response
    {
        $notas = $nota->findBy([
            'user' => $this->getUser()->getId(),
            'eliminada' => 0,
        ]);

        //$data = [];
        //foreach ($notas as $n) {
        //   $data[] = [
        //       'id' => $n->getId(),
        //       'tag' => $n->getTags(),
        //        'descrption' => $n->getDescripcion(),
        //       'publico'=>$n->isPublico()
        //    ];
        //}
        //return $this->json($data);


        return $this->render('nota/index.html.twig', [
            'controller_name' => 'NotaController',
            'notas' => $notas,
            'titulo' => "Mis Notas",
        ]);
    }

    #[Route('/nota/publica', name: 'app_nota_publica')]
    public function publicas(NotaRepository $nota): Response
    {
        $notas = $nota->findBy([
            'publico' => 1,
            'eliminada' => 0,
        ]);

        return $this->render('nota/publicas.html.twig', [
            'controller_name' => 'NotaController',
            'notas' => $notas,
            'titulo' => 'Notas Públicas',
        ]);
    }

    #[Route('/nota/eliminadas', name: 'app_nota_eliminada')]
    public function eliminadas(NotaRepository $nota): Response
    {
        $notas = $nota->findBy([
            'user' => $this->getUser()->getId(),
            'eliminada' => 1,
        ]);

        return $this->render('nota/eliminadas.html.twig', [
            'controller_name' => 'NotaController',
            'notas' => $notas,
            'titulo' => 'Mis Notas Eliminadas',
        ]);
    }

    #[Route('/nota/busqueda', name: 'app_nota_busqueda', methods: ['POST'])]
    public function busqueda(Request $request, NotaRepository $nota): Response
    {
        $param = $request->get('param');
        $user = $this->getUser()->getId();

        $notas = $nota->findByParam($param, $user);
        $publicas = $nota->findByParamPublic($param, 1, 0);

        return $this->render('nota/busqueda.html.twig', [
            'controller_name' => 'NotaController',
            'notas' => $notas,
            'publicas' => $publicas,
            'titulo' => 'Búsqueda',
        ]);
    }

    #[Route('/nota/insert', name: 'new_nota')]
    public function insertar(Request $request)
    {
        $nota  = new Nota();
        $form = $this->createForm(NotaType::class, $nota);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nota->setFechaCreacion(new DateTime('now'));
            $nota->setUser($this->getUser());
            $nota->setEliminada(0);
            $this->em->persist($nota);
            $this->em->flush();

            $this->addFlash(
                'notice',
                'Su Nota ha sido creada!'
            );

            return $this->redirectToRoute('app_nota');
        }

        return $this->render('nota/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/nota/{id}/edit', name: 'app_nota_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Nota $nota, NotaRepository $notaRepository): Response
    {
        if ($this->getUser()->getId() == $nota->getUser()->getId() && !$nota->isEliminada()) {
            $form = $this->createForm(NotaType::class, $nota);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $notaRepository->save($nota, true);

                $this->addFlash(
                    'notice',
                    'Su Nota ha sido editada!'
                );

                return $this->redirectToRoute('app_nota', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('nota/edit.html.twig', [
                'nota' => $nota,
                'form' => $form,
            ]);
        }
        return $this->redirectToRoute('nota');
    }

    #[Route('/nota/{id}/delete', name: 'app_nota_delete_soft', methods: ['POST'])]
    public function delete(Request $request, Nota $nota, NotaRepository $notaRepository): Response
    {
        if ($this->getUser()->getId() == $nota->getUser()->getId()) {
            if ($this->isCsrfTokenValid('delete' . $nota->getId(), $request->request->get('_token'))) {
                $nota->setEliminada(1);
                $nota->setFechaEliminado(new DateTime('now'));
                $this->em->persist($nota);
                $this->em->flush();
                //$notaRepository->remove($nota, true);
                $this->addFlash(
                    'notice',
                    'Su Nota ha sido borrada!'
                );
            }
        }


        return $this->redirectToRoute('app_nota', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/nota/{id}/restore', name: 'app_nota_restaurar', methods: ['POST'])]
    public function restaurar(Request $request, Nota $nota, NotaRepository $notaRepository): Response
    {
        if ($this->getUser()->getId() == $nota->getUser()->getId()) {
            if ($this->isCsrfTokenValid('restore' . $nota->getId(), $request->request->get('_token'))) {
                $nota->setEliminada(0);
                $nota->setFechaEliminado(null);
                $this->em->persist($nota);
                $this->em->flush();
                $this->addFlash(
                    'notice',
                    'Su Nota ha sido restaurada!'
                );
            }
        }
        return $this->redirectToRoute('app_nota_eliminada', [], Response::HTTP_SEE_OTHER);
    }
}
