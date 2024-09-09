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
- Mailpit

### How to setup

```sh
docker compose up -d
```

### How to use

```sh
# Notifications
php bin/console messenger:consume async -vv

# Users
symfony server:start --port=8001

# Orders
symfony server:start --port=8002
```

Open Mailpit: http://localhost:8025/

Open Postman and send a post request with a userId=34 to http://localhost:8002/api/orders

Now, check out your inbox: http://localhost:8025/
