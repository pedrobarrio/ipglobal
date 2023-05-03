<?php
declare(strict_types=1);
namespace App\UI\Http\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'app_api_get', methods: ['GET'])]
    public function getPost(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new API controller',
            'path' => 'src/Controller/ApiController.php',
        ]);
    }

    #[Route('/api', name: 'app_api_post', methods: ['POST'])]
    public function publicPost(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new API POST controller',
            'path' => 'src/Controller/ApiController.php',
        ]);
    }
}
