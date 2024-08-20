<?php

namespace App\DesignPatterns\StaticFactory;

class TxtReader implements DataReader
{

    function readData(string $file): string
    {
        return 'this is a txt file';
    }
}
