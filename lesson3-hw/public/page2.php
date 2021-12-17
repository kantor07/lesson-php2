<?php
/*
    1. Создать галерею изображений, состоящую из двух страниц:

    ### а) Просмотр всех фотографий (уменьшенных копий);
    ### б) Просмотр конкретной фотографии (изображение 
        оригинального размера)
    ### в) Все страницы вывода на экран – это twig-шаблоны. 
        Вся логика – на бэкенде.
    ### г) *Реализовать хранение ссылок и информации по 
        картинкам в БД.
*/
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


require_once '../vendor/autoload.php';

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader, [
//    'cache' => '../cache',
]);

$link = mysqli_connect('localhost','root','19041983','db_photo_gallery');

$photosID = $_GET['bigImage'];
$photos = mysqli_query($link, "SELECT address_photo, view_count FROM photos WHERE id = $photosID");
if(!$photos)exit(mysqli_error());

$template = $twig->load('page2.html.twig');

echo $template->render([
    'title' => 'Фотогалерея',
    'photos' => $photos,
  ]);

