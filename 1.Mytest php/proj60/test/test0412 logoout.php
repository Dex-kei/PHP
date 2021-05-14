<?php
session_start();

unset($_SESSION['account']);

header('Location: test0412 logo.php');
