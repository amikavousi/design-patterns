<?php

namespace App\DesignPatterns\SimpleFactory;

interface Product
{
    function getName(): string;
    function getPrice(): int;
    function getDescription(): string;
}
