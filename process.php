<?php 
ini_set('display_errors', 1);

// Данные из формы попадают в базу

$conn = mysqli_connect("localhost","root","root","php231d");//127.0.0.1

if($_POST["action"]=="insertData"){
    $sql = "INSERT INTO `chat` (`username`, `message`) 
    VALUES (?,?)";
    $statement = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($statement, "ss", $_POST["username"],$_POST["message"]);
    if(mysqli_stmt_execute($statement)){
        $message["notify"] = "ok";
        
    }else{
        $message["notify"] = "error";
    }
}
if($_POST["action"]=="getData"){
    $sql = "SELECT * FROM `chat`";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
        $data = [];
    while($row = mysqli_fetch_array($result)){
       array_push($data,$row);
    //    $data[] = $row;
    }

}
echo json_encode($data);

}




// echo json_encode($message); 
// $result = mysqli_stmt_execute($statement);

// Связывание полей и типов данных

// echo $result;
//$result = mysqli_query($conn,$sql2);
// if(mysqli_query($conn,$sql2)){
//     echo "Added";
// }

?>