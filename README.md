### This is an example of asynchronous Symfony microservices.

This project demonstrates the use of asynchronous, event-driven Symfony microservices to handle user information, order creation, and notifications using RabbitMQ.

- App 1: "Users" - Provides information about users.
- App 2: "Orders" - Creates an order and sends an order created message.
- App 3: "Notifications" - Watches for new orders and informs users of new orders.

### Tech stack
- Symfony 7.1
- PHP 8.3
- RabbitMQ
- Docker
- Composer

### How to setup

### How to use
