<?php 
    ini_set('display_errors', 1);


    $conn = mysqli_connect("localhost","root","root","php231d");//127.0.0.1


    if(!$conn){
        echo "Error" . mysqli_connect_error();
    }else{
        // echo "Connected!";
    }



    // Add user
    if($_POST && !isset($_POST["id"])){
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

    if($_POST && isset($_POST["id"])){
        $username = mysqli_escape_string($conn,$_POST["username"]);
        $pass = mysqli_escape_string($conn,$_POST["password"]);
        $id =  mysqli_escape_string($conn,$_POST["id"]);

        $sql = "UPDATE `crud` SET `username` = '$username', `password` = '$pass' 
        WHERE `id` = '$id'";

        if(mysqli_query($conn,$sql)){
            echo "Updated";
        }else{
            echo mysqli_error($conn);
        }
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


    if(isset($_GET["delete_user"])){


        $userid = mysqli_escape_string($conn,$_GET["id"]);
        $sql = "DELETE FROM `crud` WHERE `id`='$userid'";

        if(mysqli_query($conn,$sql)){
            echo "deleted";
        }else{
            echo mysqli_error($conn);
        }

    }

    //Update user

    // Delete user
?>