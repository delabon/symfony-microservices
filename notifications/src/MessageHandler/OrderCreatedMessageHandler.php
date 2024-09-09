<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\OrderCreatedMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\Recipient;

#[AsMessageHandler]
class OrderCreatedMessageHandler
{
    public function __construct(private readonly NotifierInterface $notifier)
    {
    }

    public function __invoke(OrderCreatedMessage $message)
    {
        $orderId = $message->getOrderId();
        $userEmail = $message->getUserEmail();

        $notification = (new Notification("Order #{$orderId} Created", ['email']))
            ->content("Your order #{$orderId} has been successfully created.");

        $recipient = new Recipient($userEmail);

        $this->notifier->send($notification, $recipient);
    }
}
