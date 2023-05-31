<?php 
    ini_set('display_errors', 1);


    $conn = mysqli_connect("localhost","root","root","php231d");//127.0.0.1


    if(!$conn){
        echo "Error" . mysqli_connect_error();
    }else{
        // echo "Connected!";
    }



    // Add user
    if($_POST){

        $username = mysqli_escape_string($conn,$_POST["username"]);
        $pass = mysqli_escape_string($conn,$_POST["password"]);

        // echo $username,$pass;
        $sql = "INSERT INTO `crud`(`username`, `password`) 
        VALUES ('$username','$pass')";
        if(mysqli_query($conn,$sql)){
            echo "Added";
        }


        // var_dump($_POST);
    }

    if(isset($_GET["get_users"])){
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
    }
    echo json_encode($data);
}


    // Load User
    if(isset($_GET["edit_user"])){
        $userid = mysqli_escape_string($conn,$_GET["id"]);
        $sql = "SELECT * FROM `crud` WHERE crud.id='$userid'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
    }
    echo json_encode($data);

    }


    //Update user

    // Delete user
?>