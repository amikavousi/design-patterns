<?php

namespace App\DesignPatterns\StaticFactory;

class CsvReader implements DataReader
{

    function readData(string $file): string
    {
        return 'this is a csv file';
    }
}
