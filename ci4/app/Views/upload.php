<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="<?=base_url('/uploadfile')?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Uplodad">
        </form>
</body>
</html>