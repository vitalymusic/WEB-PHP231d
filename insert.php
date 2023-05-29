<?php 
ini_set('display_errors', 1);

// Данные из формы попадают в базу

$conn = mysqli_connect("localhost","root","root","php231d");//127.0.0.1



$sql = "INSERT INTO `users` (`username`, `password`, `email`) 
VALUES (?,?,?)";
$statement = mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($statement, "sss", $_POST["username"],$_POST["password"],$_POST["email"]);
if(mysqli_stmt_execute($statement)){
    $message["notify"] = "ok";
     
}else{
    $message["notify"] = "error";
}

echo json_encode($message); 
// $result = mysqli_stmt_execute($statement);

// Связывание полей и типов данных

// echo $result;
//$result = mysqli_query($conn,$sql2);
// if(mysqli_query($conn,$sql2)){
//     echo "Added";
// }

?>