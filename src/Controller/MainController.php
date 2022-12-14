<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Repository\BrandRepository;
use App\Repository\ComputerRepository;
use ContainerQ2nyy8Z\getBrandRepositoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{ #[Route('/', name: 'home')]
    public function index(ComputerRepository $computerRepository, getBrandRepositoryService $brandRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'computers' => $computerRepository ->findBy([
                'is_visible'=>true
            ]),
        ]);
    }

    
}
