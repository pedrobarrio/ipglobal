<?php
declare(strict_types=1);
namespace App\UI\Http\Controller;

use App\App\Application\API\GetPost\GetPostByIdUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{

    public function __construct(private readonly GetPostByIdUseCase $getPostByIdUseCase )
    {
    }

    #[Route('/api/{id}', name: 'app_api_get', methods: ['GET'])]
    public function getPost(string $id): JsonResponse
    {
        $response =  $this->getPostByIdUseCase->execute($id);
        return $this->json(
            [
            'message' => $response ,
            ]
        );
    }

    #[Route('/api', name: 'app_api_post', methods: ['POST'])]
    public function publicPost(): JsonResponse
    {
        return $this->json(
            [
            'message' => 'Welcome to your new API POST controller',
            'path' => 'src/Controller/ApiController.php',
            ]
        );
    }
}
