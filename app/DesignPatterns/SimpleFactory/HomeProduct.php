<?php

namespace App\DesignPatterns\SimpleFactory;

readonly class HomeProduct implements Product
{

    public function __construct(
        private string $name,
        private int    $price,
        private string $description,
    )
    {
    }

    function getName(): string
    {
        return $this->name;
    }

    function getPrice(): int
    {
        return $this->price;
    }

    function getDescription(): string
    {
        return $this->description;
    }
}
