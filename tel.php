<?php 
$recepient = "galrinat@mail.ru";
$sitename = "ufamanipulator.ru";
$tel = trim($_POST["phone"]);
$name = trim($_POST["name"]);
$text = trim($_POST["text"]);
$call = "Заказ с сайта: $sitename\n";
$message = "Позвоните пожалуйста на номер: $tel\n Заказ на $name часов \n По адресу: $text";
mail($recepient, $call, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
 ?>