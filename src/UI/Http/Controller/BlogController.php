<?php

namespace App\UI\Http\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new BLOG controller!',
            'path' => 'src/Controller/BlogController.php',
        ]);
    }
}
