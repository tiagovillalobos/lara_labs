<?php

namespace Tests\Feature;

use App\Support\Classes\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Date;
use Tests\TestCase;

class SupportUserTest extends TestCase
{
    public function test_user_name_not_change(): void
    {
        $user = new User('John Doe', 'email', '21/04/1988');

        $this->assertEquals('John Doe', $user->getName());
    }

    public function test_user_is_legal_age()
    {
        $user = new User('John Doe', 'email', '21/04/1988');

        $this->assertTrue($user->getAge() >= 18);
    }

    public function test_user_age_is_within_the_cutoff_date()
    {
        $cuttoffDate = Date::createFromFormat('d/m/Y', '31/03/2024');

        $user = new User('John Doe', 'email', '21/04/2021');

        $userAge = $user->getAge(today: $cuttoffDate);

        $this->assertTrue($userAge >= 1 && $userAge <= 5);
    }
}