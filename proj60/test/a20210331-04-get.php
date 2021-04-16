<?php

//$a = isset($_GET['a']) ? $_GET['a'] : 0;
//$b = isset($_GET['b']) ? $_GET['b'] : 0;

$a = $_GET['a'] ?? 0; // php 7
$b = $_GET['b'] ?? 0;

echo $a + $b;

