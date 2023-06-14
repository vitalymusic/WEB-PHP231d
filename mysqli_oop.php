<?php 
    $conn = new mysqli("localhost","root","root","php231d");

    // var_dump($conn);    

    if(!$conn){
        echo $conn->connect_error;
    }
    $result = $conn->query("SELECT * FROM `users`");

    // var_dump($result); 
    while($row = $result->fetch_array()){
        echo "username:" . $row["username"] . " ";
        echo "password:" . $row["password"] . "<br>";
    }

    // 1. написать CRUD но в стиле OOP 
    // 2. Создать свои объекты и методы для вывода данных на страницу (на любую тему)
    
?>