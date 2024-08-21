<?php

namespace App\DesignPatterns\FactoryMethod;

interface PaymentMethodFactory
{
    public function createPayment();
}
