<?php

// Подключение к БД
require_once 'db.php';
global $DBLink;

$count = $_GET['countPage'];  // количество записей, получаемых за один раз
$start = $_GET['startPage']; // с какой записи начать выборку
// Получение записей для первой страницы
$result = mysqli_query($DBLink, "SELECT address_photo, photo_name FROM photos ORDER BY view_count DESC LIMIT $start, $count ") or die(mysql_error());
$photo = array();
  while($row = mysqli_fetch_assoc($result)){
    $photo[] = $row;
 // var_dump($photo);
  
}
echo json_encode($photo);