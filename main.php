<?php

require __DIR__ . '/vendor/autoload.php';

use App\Stack\Stack;

// Stack
$addItem = new Stack(10, array('Banana', 'Apple', 'Pineapple', 'Milk', 'Cookie', 'Soap', 'Rice', 'Bean', 'Cheese', 'Meat'));
$addItem->push('Fish');
print_r($addItem);

$addItem->pop();
print_r($addItem);

echo $addItem->top();

echo $addItem->isEmpty();
//__________________________________________________________________

// Queue