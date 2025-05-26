<?php

declare(strict_types=1);

namespace App\Stack;

class Stack
{
    public function __construct(private int $limit = 10, private array $stack = []) {}

    public function push(mixed $item)
    {
        if ($this->limit < count($this->stack)) {
            echo "Stack is full!" . PHP_EOL;
            return;
        }

        $length = count($this->stack);

        for ($i = $length; $i > 0; $i--) {
            $this->stack[$i] = $this->stack[$i - 1];
        }

        $this->stack[0] = $item;
    }

    public function pop()
    {
        if (empty($this->stack)) {
            echo "Stack is empty" . PHP_EOL;
            return;
        }

        $item = $this->stack[0];

        $lastItem = count($this->stack) - 1;

        for ($i = 0; $i < $lastItem; $i++) {
            $this->stack[$i] = $this->stack[$i + 1];
        }

        unset($this->stack[$lastItem]);

        echo "Removed item: {$item}" . PHP_EOL;

        return $item;
    }

    public function top()
    {
        $topItem = $this->stack[0];

        return "Top of the stack is: {$topItem}" . PHP_EOL;
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}
