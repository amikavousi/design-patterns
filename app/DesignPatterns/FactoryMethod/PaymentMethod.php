<?php

namespace App\DesignPatterns\FactoryMethod;

interface PaymentMethod
{
    public function processPayment(int $amount): string;
}
