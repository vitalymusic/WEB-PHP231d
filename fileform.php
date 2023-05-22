<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="date" name="" id="">
        <input type="submit" value="upload">
    </form>


    <div class="content">
        <?php 
            $dir = scandir("./");
            $files = array_splice($dir,3);

            foreach($files as $file){
                echo $file . "<br>";
            }
        ?>
    </div>
</body>
</html>

<!-- сделать загрузку файла на сервер и отображение как галереи -->