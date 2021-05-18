<?php

include_once "Node.php";
include_once "LinkList.php";

$linkedlist = new LinkList();
$linkedlist->insertFirst(1);
$linkedlist->insertFirst(2);
$linkedlist->insertFirst(3);
$linkedlist->insertFirst(4);
$linkedlist->insertLast(5);
$linkedlist->insertLast(6);
$linkedlist->insertLast(7);
$linkedlist->insertLast(8);
$linkedlist->insertLast(9);
$totalNode = $linkedlist->totalNode();
$linkData = $linkedlist->readList();

echo $totalNode. '<br>';
echo implode('-', $linkData);
