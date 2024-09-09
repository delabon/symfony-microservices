<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class OrderController extends AbstractController
{
    public function __construct(private readonly HttpClientInterface $httpClient)
    {
    }

    #[Route('/api/orders', name: 'orders_store', methods: ['POST'])]
    public function store(Request $request): JsonResponse
    {
        $response = $this->httpClient->request('GET', 'http://localhost:8001/api/users/' . (int)$request->get('userId', 0));
        $user = $response->toArray();

        // Simulate order creating logic
        $order = [
            'id' => rand(1, 10000),
            'user_id' => $user['id'],
            'status' => 'completed'
        ];

        return $this->json($order, Response::HTTP_CREATED);
    }
}