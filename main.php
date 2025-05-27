<?php

require __DIR__ . '/vendor/autoload.php';

use App\Stack\Stack;
use App\Queue\Queue;

// Stack
echo str_repeat("-", 30) . PHP_EOL;
echo ("          STACK               ") . PHP_EOL;
echo str_repeat("-", 30) . PHP_EOL;
$addItem = new Stack(10, array('Banana', 'Apple', 'Pineapple', 'Milk', 'Cookie', 'Soap', 'Rice', 'Bean', 'Cheese', 'Meat'));
$addItem->push('Fish');
print_r($addItem);

$addItem->pop();
print_r($addItem);

echo $addItem->top();

echo $addItem->isEmpty();
//__________________________________________________________________

// Queue
echo str_repeat("-", 30) . PHP_EOL;
echo ("          QUEUE               ") . PHP_EOL;
echo str_repeat("-", 30) . PHP_EOL;
$queue = new Queue(array('Cookie', 'Apple', 'Pineapple', 'Milk', 'Meat'));
$queue->peek();
$queue->dequeue();
print_r($queue);
