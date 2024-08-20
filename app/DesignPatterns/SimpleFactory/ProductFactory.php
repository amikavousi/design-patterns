<?php

namespace App\DesignPatterns\SimpleFactory;

use http\Exception\InvalidArgumentException;

class ProductFactory
{
    public function creatProduct(string $type, string $name, int $price, string $description): Product
    {
        return match ($type) {
            'digital' => new DigitalProduct($name, $price, $description),
            'book' => new BookProduct($name, $price, $description),
            'home' => new HomeProduct($name, $price, $description),
            default => throw new InvalidArgumentException()
        };
    }
}
