<?php

declare(strict_types=1);

namespace App\Message;

class OrderCreatedMessage
{

    public function __construct(
        private int $orderId,
        private int $userId,
        private string $userEmail
    ) {
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getUserEmail(): string
    {
        return $this->userEmail;
    }
}
