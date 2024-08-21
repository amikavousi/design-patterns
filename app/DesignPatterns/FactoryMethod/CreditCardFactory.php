<?php

namespace App\DesignPatterns\FactoryMethod;

class CreditCardFactory implements PaymentMethodFactory
{

    public function __construct(
        private string $cardNumber,
        private string $cvv,
        private string $expirationDate,
    )
    {
    }

    public function createPayment(): PaymentMethod
    {
        return new CreditCard($this->cardNumber, $this->cvv, $this->expirationDate);
    }
}
