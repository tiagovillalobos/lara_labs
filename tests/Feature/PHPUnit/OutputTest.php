<?php declare(strict_types=1);

namespace Tests\Feature\PHPUnit;

use Tests\TestCase;

class OutputTest extends TestCase
{
    public function testExpectOutputString() : void
    {
        $this->expectOutputString(expectedString: 'Hello World');
        
        echo 'Hello World';
    }

    public function testExpectOutputRegexString() : void
    {
        $this->expectOutputRegex(expectedRegex: '/Hello\sWorld/');
        
        echo 'Hello World';
    }

}
