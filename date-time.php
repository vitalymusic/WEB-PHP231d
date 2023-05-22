<?php 


date_default_timezone_set("Europe/Riga");
echo date_default_timezone_get();

$curr =  time();
$nextweek = mktime(21,0,0,5,29,2023);
$nextweek = time() + (60*60*24*14);

echo "<br>";
echo date("d-m-Y"),"<br>";
echo date("d-m-Y H:i:s",$nextweek);


// 1. сделать загрузку файла на сервер и отображение как галереи
// 2. Написать авторизацию 
// 3. пеализовать переводы








?>