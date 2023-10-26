<?php

namespace Tests\Feature\PHPUnit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Depends;
use Tests\TestCase;

class DependenciesTest extends TestCase
{
    public function testEmpty() : array
    {
        $stack = [];
        $this->assertEmpty(actual: $stack);

        return $stack;
    }

    #[Depends('testEmpty')]
    public function testPush(array $stack) : array
    {
        $stack[] = 'test';
        $this->assertSame(expected: 'test', actual: $stack[count(value: $stack) - 1]);
        $this->assertNotEmpty(actual: $stack);

        return $stack;
    }

    #[Depends('testPush')]
    public function testPop(array $stack) : void
    {
        $this->assertSame(expected: 'test', actual: array_pop(array: $stack));
        $this->assertEmpty(actual: $stack);
    }
}
