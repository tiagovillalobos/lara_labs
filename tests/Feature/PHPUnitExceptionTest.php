<?php 

namespace Tests\Feature;

use App\Support\Test\User;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PHPUnitExceptionTest extends TestCase
{
    public function testSetUserBirthdayAsInteger(): void
    {
        $this->expectException(exception: InvalidFormatException::class);

        new User(
            attributes: [
                'birthday' => 1
            ]
        );

    }

    public function testExpectExceptionCode(): void
    {
        $this->expectExceptionCode(code: 0);

        new User(
            attributes: [
                'birthday' => 1
            ]
        );

    }

    public function testExpectExceptionMessage(): void
    {
        $this->expectExceptionMessage(message: 'Not enough data available to satisfy format');

        new User(
            attributes: [
                'birthday' => 1
            ]
        );

    }

    public function testExpectExceptionMessageMatches(): void
    {
        $this->expectExceptionMessageMatches(
            regularExpression: '/Not enough data available to satisfy format/'
        );

        new User(
            attributes: [
                'birthday' => 1
            ]
        );

    }
}
