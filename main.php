<?php 
    // ini_set('display_errors', 1);
    require_once("funcions.php");
    session_start();

    if($_SESSION["name"]!="Vitaly" && $_SESSION["pass"]!="12345"){
        die("User is not alowed");
    }
    
?>
<?php include("./head.php")?>
    <!-- main content -->
    
<?php include("./header.php")?>    
<?php include_once("./nav.php")?>    
  
<?php include("./content.php")?>    
<?php include("./footer.php")?>  

<?php include_once("./nav.php")?> 
    
    


<!-- 
    Сделать Копирование - создание файлов, прочитать данные из файла выведите их в виде таблицы
    foreach(items as key=>value ){

    }
    Использование сессии - общие данные для разных страниц
    include и require

 -->
    
</body>
</html>