<?php 

namespace App\DataStructure\List\Contract;

Interface ListContract
{
    public function isEmpty(): bool;
    public function push($value): void;
    public function pop(): void;
}