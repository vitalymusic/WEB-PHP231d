<?php 
    include "options.php";

    session_start();
    if(!isset($_SESSION["lang"])){
        $_SESSION["lang"]=$options["default_language"];
    }

    if(isset($_GET["lang"])){
        if($_GET["lang"]=="lv"){
            $_SESSION["lang"]="lv";
        }
        if($_GET["lang"]=="rus"){
            $_SESSION["lang"]="rus";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="?lang=rus">rus</a>
        <a href="?lang=lv">lv</a>
    </header>
    <main>
        <?php 
            include $_SESSION["lang"] .".php";
        ?>
        
    </main>
</body>
</html>