<?php

namespace Tests\Feature\PHPUnit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SetupTearDownTest extends TestCase
{

    private int $number1;
    private int $number2;

    // public static function setUpBeforeClass(): void
    // {
        
    // }

    public function setUp(): void
    {
        $this->number1 = 1;
        $this->number2 = 2;
    }

    public function testAdd()
    {
        $result = $this->number1 + $this->number2;
        $this->assertEquals(3, $result);
    }


    // public function tearDown(): void
    // {
    //     parent::tearDown();
    //     $this->artisan('migrate:reset');
    // }

    // public static function tearDownAfterClass(): void
    // {
        
    // }
}
