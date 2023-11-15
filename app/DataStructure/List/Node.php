<?php declare(strict_types=1);

namespace App\DataStructure\List;

class Node 
{
    private $value;
    private ?Node $next = null;
    private ?Node $prev = null;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function setNext(?Node $node): void
    {
        $this->next = $node;
    }

    public function getNext(): ?Node
    {
        return $this->next;
    }

    public function setPrev(?Node $node): void
    {
        $this->prev = $node;
    }

    public function getPrev(): ?Node
    {
        return $this->prev;
    }

    public function getValue()
    {
        return $this->value;
    }
}