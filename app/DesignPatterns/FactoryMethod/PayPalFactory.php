<?php

namespace App\DesignPatterns\FactoryMethod;

class PayPalFactory implements PaymentMethodFactory
{

    public function __construct(
        private string $email,
        private string $password,
    )
    {
    }

    public function createPayment(): PaymentMethod
    {
        return new PayPal($this->email, $this->password);
    }
}
