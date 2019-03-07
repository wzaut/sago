<?php

namespace Sago\Prepare\Lru;

require_once "LRU.php";

$lru = new LRU(5);

$lru->set(1, 1);
$lru->set(2, 2);
$lru->set(3, 3);
$lru->set(4, 4);
$lru->set(5, 5);

$lru->print_pool();

$lru->set(6, 6);

$lru->print_pool();

echo $lru->get(4) . "\n";

$lru->print_pool();

$lru->set(2, 2222);

$lru->print_pool();