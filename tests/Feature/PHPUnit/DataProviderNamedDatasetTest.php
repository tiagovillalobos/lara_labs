<?php

namespace Tests\Feature\PHPunit;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class DataProviderNamedDatasetTest extends TestCase
{   
    public static function additionProvider(): array
    {
        return [
            'zero plus zero is zero' => [0, 0, 0],
            'zero plus one is one'   => [0, 1, 1],
            'one plus zero is one'   => [1, 0, 1],
            'one plus one is two'    => [1, 1, 2]
        ];
    }

    #[DataProvider('additionProvider')]
    public function testNamedAddition(int $number1, int $number2, int $result): void
    {
        $this->assertSame(expected: $result, actual: $number1 + $number2, message: 'The sum is not correct');
    }
}
