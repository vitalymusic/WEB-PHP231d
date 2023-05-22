<?php 
var_dump($_REQUEST);

session_start();

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
    <div>
        <?php 
            if(isset($_SESSION["User"]) && $_SESSION["logged_in"]==true){
                echo "Hello, {$_SESSION["User"]}";
                echo "<a href=\"?logout=true\">Logout</a>";
            }
        ?>
    </div>
    <form action="" method="post">
        <input type="text" name="username" id="">
        <input type="password" name="pass" id="">
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_POST){
            if($_POST["username"]!=="admin" || $_POST["pass"]!=="Admin"){
                session_destroy();
                echo "Username or password is incorrect!";
            }else{
                 session_start();
                 $_SESSION["User"] =    $_POST["username"];
                 $_SESSION["logged_in"] = true;
            }
        }
        if($_GET["logout"]==true){
            $_SESSION["logged_in"] = false;
        }
    ?>
</body>
</html>

