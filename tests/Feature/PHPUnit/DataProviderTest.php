<?php

namespace Tests\Feature\PHPUnit;

use App\Support\Test\PHPUnit\DataProvider\ExternalDataProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Tests\TestCase;

class DataProviderTest extends TestCase
{
    public static function additionProvider() : array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }

    #[DataProvider('additionProvider')]
    public function testAdd(int $number1, int $number2, int $result) : void
    {
        $this->assertEquals(expected: $result, actual: $number1 + $number2, message: 'The sum is not correct');
    }

    #[DataProviderExternal(ExternalDataProvider::class, 'multiplicationProvider')]
    public function testMultiply(int $number1, int $number2, int $result) : void
    {
        $this->assertEquals(expected: $result, actual: $number1 * $number2, message: 'The multiplication is not correct');
    }
}
