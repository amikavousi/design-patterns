<?php

namespace App\DesignPatterns\StaticFactory;

use http\Exception\InvalidArgumentException;

class FileProcessor
{
    static function dataReader(string $type): DataReader
    {
        return match ($type) {
            'csv' => new CsvReader(),
            'json' => new JsonReader(),
            'txt' => new TxtReader(),
            default => throw new InvalidArgumentException()
        };
    }
}
