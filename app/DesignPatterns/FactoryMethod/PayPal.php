<?php

namespace App\DesignPatterns\FactoryMethod;

class PayPal implements PaymentMethod
{
    public function __construct(
        private string $email,
        private string $password,
    )
    {
    }

    public function processPayment(int $amount): string
    {
        return 'PayPal';
    }
}
