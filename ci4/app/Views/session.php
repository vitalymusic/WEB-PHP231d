
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_SESSION["parameters"]["main_menu"]!="hidden"):?>
    <nav>
        <a href="#">test</a>
        <a href="#">test</a>
        <a href="#">test</a>
        <a href="#">test</a>
    </nav>   
    <?php endif; ?> 

    <?php if($_SESSION["parameters"]["title_h1"]=="show"):?>
    <h1>Session</h1>

    <?php ?>
    <?php endif; ?>      


</body>
</html>