<?php

namespace App\DesignPatterns\StaticFactory;

class JsonReader implements DataReader
{

    function readData(string $file): string
    {
        return 'this is a json file';
    }
}
