<?php 

$conn = mysqli_connect("localhost","root","root","php231d");//127.0.0.1


if(!$conn){
    echo "Error" . mysqli_connect_error();
}else{
    // echo "Connected!";
}


// Get data from table
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_array($result)){
        echo "username:" . $row["username"] . " ";
        echo "password:" . $row["password"] . "<br>";
    }

}
// Add data to table
$sql2 = "INSERT INTO `users`(`username`, `password`, `email`, `is_admin`) 
VALUES ('Petja','12345','petjs@users.com','1')";
//$result = mysqli_query($conn,$sql2);
if(mysqli_query($conn,$sql2)){
    echo "Added";
}


// update 
$sql3 = "UPDATE users SET `password`=543221 WHERE users.id = 7";
if(mysqli_query($conn,$sql3)){
    echo "Updated";
}else{
    echo mysqli_error($conn);
}

$sql4 = "DELETE from users WHERE users.id > 8";
if(mysqli_query($conn,$sql4)){
    echo "Deleted";
}







// var_dump($result);








mysqli_close($conn);
?>