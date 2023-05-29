<?php 



?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script></script>
</head>
<body>
    <h1>форма регистрации</h1>
    <form action="" method="">
            <input type="text" name="username" id="">
            <input type="password" name="password" id="">
            <input type="email" name="email" id="">
            <input type="submit" value="Register">
    </form>
    <div>

    </div>
    <script>

        let form = document.querySelector('form');
        form.onsubmit = (event)=>{
            event.preventDefault();
            formData = new FormData(form);
            fetch("insert.php",{
                method:"POST",
                body:formData
            }).then((resp)=>{
                return resp.json();
            }).then((resp)=>{
                if(resp.notify=="ok"){
                    document.querySelector("div").innerHTML = "User added!!!";
                }
               
            })
            
        }
        
    </script>
</body>
</html>