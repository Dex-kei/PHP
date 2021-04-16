<?php

$a = empty($_GET['a']) ? 0 : intval($_GET['a']);
$b = empty($_GET['b']) ? 0 : intval($_GET['b']);

echo ($a + $b) . '<br>';  // . 做字串串接

$c = [];

echo empty($c) ? '空的' : '不是';