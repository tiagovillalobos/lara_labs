<?php 

namespace App\Support\Test;

use Carbon\Carbon;

class User 
{
    private string $name;
    private string $email;
    private Carbon $birthday;

    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (!method_exists(object_or_class: $this, method: 'set' . ucfirst(string: $key))) {
                continue;
            }

            $this->{'set' . ucfirst(string: $key)}($value);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void 
    {
        $this->name = $name;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function setEmail(string $email): void 
    {
        $this->email = $email;
    }

    public function getBirthday(): Carbon|string
    {
        return $this->birthday;
    }

    public function setBirthday(Carbon|string $birthday): void 
    {
        $this->birthday = (is_string($birthday)) ? Carbon::createFromFormat(format: 'd/m/Y', time: $birthday) : $birthday;
    }

    public function getAge(Carbon $today = null) : int
    {
        $today = $today ?? Carbon::now();
        
        return $this->getBirthday()->diffInYears(date: $today);
    }

    public function toJson(): string 
    {
        return response()->json(
            data: [
                'name'     => $this->getName(),
                'email'    => $this->getEmail(),
                'birthday' => $this->getBirthday()
            ], 
            status: 200
        )
        ->getContent();
    }

}