<?php

namespace Tests\Feature\PHPUnit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StubTest extends TestCase
{
   public function testCreateStub()
   {
       $stub = $this->createStub(\App\Models\User::class);
    
       $this->assertInstanceOf(\App\Models\User::class, $stub);
   }

   public function _testCreateStubForIntersection()
   {

        $object = $this->createStubForIntersectionOfInterfaces([
            \App\Contracts\IUser::class,
            \App\Contracts\IAdmin::class
        ]);

        $this->assertInstanceOf(\App\Contracts\IUser::class, $object);

   }

   public function testCreateConfiguratedStub()
   {
       $stub = $this->createConfiguredStub(
           \App\Models\User::class,
           [
               'name' => 'John Doe',
               'email' => 'email',
           ]
         );
    }


}