<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="chatDIV">

    </div>


    <div class="form">
        <form>
            <input type="text" name="username" id="">
            <textarea name="message" id="" cols="30" rows="10"></textarea>   
            <input type="submit" value="Send message"> 
        </form>
    </div>

    <script>
        // Send data
         let form = document.querySelector('form');
        form.onsubmit = (event)=>{
            event.preventDefault();
            formData = new FormData(form);
            formData.append("action","insertData");
            fetch("process.php",{
                method:"POST",
                body:formData
            }).then((resp)=>{
                return resp.text();
            }).then((resp)=>{
            console.log(resp);
            })
            
        }
    </script>

    <script>
        // Receive data
        setInterval(getData,500);

        function getData(){
        formData2 = new FormData();
        formData2.append("action","getData");
        fetch("process.php",{
                method:"POST",
                body:formData2
            }).then((resp)=>{
                return resp.json();
            }).then((resp)=>{
                document.querySelector(".chatDIV").innerHTML = "";
                resp.map((item)=>{
                    
                    document.querySelector(".chatDIV").innerHTML += `
                        <div class="message">
                        Username: ${item.username} <br>
                        Message: ${item.message} <br>
                        Time: ${item.time} <br>
                        </div>
                    `;
                })
            })
        }

    </script>
</body>
</html>