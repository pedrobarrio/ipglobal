<?php
declare(strict_types=1);

namespace App\UI\Http\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new BLOG controller!',
            'path' => 'src/Controller/BlogController.php',
        ]);
    }

    #[Route('/blog/{id}', name: 'app_blog_post', methods: ['POST'])]
    public function getPost(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new BLOG POST controller!',
            'path' => 'src/Controller/BlogController.php',
        ]);
    }
}
