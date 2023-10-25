<?php declare(strict_types=1);

namespace Tests\Feature;

use App\Support\Test\Greeter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PHPUnitGreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter();

        $this->assertSame('Hello, Taylor!', $greeter->greet(name: 'Taylor'));
    }
}
