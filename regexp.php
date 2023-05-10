<?php
    //$expression = "/html$|php$/im";
    $expression = "/\./im";
    $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    ";
    $files = "
        index.mp3,index.html,index.php
    ";
    $word = "Alex";

   


    // if(preg_match($expression,$word)){
    //     echo "найдены совпадения";
    // }else{
    //     echo "Не найдены совпадения";
    // }

    //preg_match_all()
    //preg_replace("regexp","New Text","text");

     // if(preg_match($expression,$text)){
    //     echo "найдены совпадения";
    // }else{
    //     echo "Не найдены совпадения";
    // }

        
        $text2 = readfile("text");
        $text2 = file_get_contents("text");
        //прочитать файл
        echo preg_match($expression,$text2);
        echo preg_replace($expression,"<br/>",$text2);

        





?>