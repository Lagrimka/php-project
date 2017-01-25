<?php

// подключение приложения
require 'app.php';

// работа с логикой
$content = "Текущая страница $page";
if ($page == "page1"){
    $template = "views/page1.php";
} else {
    $template = "views/default.php";
}
    

// отображение результата
include 'views/layout.php';