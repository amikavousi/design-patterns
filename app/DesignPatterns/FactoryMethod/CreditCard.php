<?php

namespace App\DesignPatterns\FactoryMethod;

class CreditCard implements PaymentMethod
{

    public function __construct(
        private string $cardNumber,
        private string $cvv,
        private string $expirationDate,
    )
    {
    }

    public function processPayment(int $amount): string
    {
        return 'Credit card';
    }
}
