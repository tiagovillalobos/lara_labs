<?php declare(strict_types=1);

namespace App\Support\Test\PHPUnit\DataProvider;

final class ExternalDataProvider
{
    public static function multiplicationProvider() : array
    {
        return [
            [0, 0, 0],
            [0, 1, 0],
            [1, 0, 0],
            [1, 1, 1]
        ];
    }
}