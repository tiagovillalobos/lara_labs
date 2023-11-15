<?php declare(strict_types=1);

namespace App\DataStructure\List;

use App\DataStructure\List\Contract\ListContract;

class LinkedList implements ListContract
{
    private ?Node $head = null;
    private ?Node $tail = null;

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function push($value): void
    {
        $node = new Node($value);

        if ($this->isEmpty()) {
            $this->head = $node;
            $this->tail = $node;
            return;
        }

        $this->tail->setNext($node);
        $this->tail = $node;
    }

    public function pop(): void
    {
        if ($this->isEmpty()) {
            return;
        }

        if ($this->head === $this->tail) {
            $this->head = null;
            $this->tail = null;
            return;
        }

        $current = $this->head;
        while ($current->getNext() !== $this->tail) {
            $current = $current->getNext();
        }

        $current->setNext(null);
        $this->tail = $current;
    }

    public function getHead(): ?Node
    {
        return $this->head;
    }

    public function getTail(): ?Node
    {
        return $this->tail;
    }
}