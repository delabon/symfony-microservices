<?php

declare(strict_types=1);

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/api/users/{id<\d+>}', name: 'users_show', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        // Simulate fetching user data
        return $this->json([
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'johndoe@test.test',
        ]);
    }
}
