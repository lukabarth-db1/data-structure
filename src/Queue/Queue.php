<?php

declare(strict_types=1);

namespace App\Queue;

class Queue
{
    public function __construct(private array $queue = []) {}

    public function enqueue(mixed $item): void
    {
        $this->queue[] = $item;
    }

    public function dequeue()
    {
        if (empty($this->queue)) {
            echo "Queue is empty" . PHP_EOL;
            return;
        }

        $item = $this->queue[0];
        $length = count($this->queue) - 1;

        for ($i = 1; $i <= $length; $i++) {
            $this->queue[$i - 1] = $this->queue[$i];
        }

        unset($this->queue[$length]);

        echo "Removed item: {$item}" . PHP_EOL;

        return $item;
    }

    public function peek(): bool
    {
        if (empty($this->queue)) {
            echo "Queue is empty" . PHP_EOL;
            return false;
        }

        $firstItem = $this->queue[0];
        echo "First item in the queue is: {$firstItem}" . PHP_EOL;

        return true;
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }
}
