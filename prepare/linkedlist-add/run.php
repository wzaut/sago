<?php
/**
 * Created by PhpStorm.
 * User: weizhexu
 * Date: 2019/3/3
 * Time: 下午8:15
 */
require_once "LinkedListAdd.php";
require_once "Node.php";

$node11 = new Node(9);
$node12 = new Node(9);
$node13 = new Node(9);
$node14 = new Node(9);
$node11->next = $node12;
$node12->next = $node13;
$node13->next = $node14;

$node21 = new Node(9);
$node22 = new Node(9);
$node23 = new Node(8);
$node21->next = $node22;
$node22->next = $node23;


$function_class = new LinkedListAdd();
$head1 = $function_class->addHead($node11);
$head2 = $function_class->addHead($node21);
$function_class->print_list($head1);
$function_class->print_list($head2);
$function_class->reverse($head1);
$function_class->reverse($head2);
$function_class->print_list($head1);
$function_class->print_list($head2);

echo "add two linked list" . "\n";
$head = $function_class->add($head1, $head2);
$function_class->print_list($head);
$function_class->reverse($head);
$function_class->print_list($head);
