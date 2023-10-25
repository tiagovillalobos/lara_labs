<?php

namespace Tests\Feature\PHPUnit;

use PHPUnit\Framework\Attributes\RequiresFunction;
use Tests\TestCase;

class IncompleteAndSkippedTest extends TestCase
{
    public function testIncomplete() : void
    {
        $this->markTestIncomplete(message: 'Teste incompleto');
    }

    public function testSkipped() : void
    {
        $this->markTestSkipped(message: 'Teste pulado');
    }

    #[RequiresFunction('fopen')]
    public function testRequiresFunction() : void
    {
        $this->assertTrue(condition: true, message: 'Função fopen() existe');
    }
}
