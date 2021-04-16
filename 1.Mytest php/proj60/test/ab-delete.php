<?php include __DIR__. '/parts/config.php';

$sid = intval($_GET['sid']);

$come_form = $_SERVER['HTTP_REFERER'] ?? 'ab-list.php';



if(! empty($sid)){
    $sql = "DELETE FROM `address_book` WHERE `sid`=$sid ";
    $pdo->query($sql); 
}
// header('Location: ab-list.php');
header('Location: '. $come_from);