<?php

namespace App\DesignPatterns\StaticFactory;

interface DataReader
{
    function readData(string $file): string;
}
