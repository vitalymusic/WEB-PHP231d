<?php 

    // declare(strict_types=1);
    abstract class House0{
        // Черновик чертежа
    }
    interface Actions{
        public function goOut();
        public function saySomething(int $text);

    }

    class House{
        public $rooms;   
        public $floors;
        public $address;

        public function __construct(int $rooms,int $floors, string $address){
            $this->rooms = $rooms;
            $this->floors = $floors;
            $this->address = $address;
        }



        // public int $rooms = 4;
        // private int $floors = 2;
        // public  $address;



        public function setAddress(string $address){
            $this->address = $address;

        }
        public function showAddress(){
            echo $this->address;
        }
        public function setFloors($floors){
            $this->floors = $floors;
        }
        private function showFloors(){
            echo $this->floors;
        }

    }

    class House2 extends House{
        static function showFloors(){
            echo "ok";
        }
       
    }

    final class House3 extends House{
        public $color;
        public $windowCount;
        public function __construct(int $rooms,int $floors, string $address,string $color,int $windowCount){
            parent::__construct($rooms,$floors,$address);
            $this->color = $color;
            $this->windowCount = $windowCount;
        }
    }
    class House4 implements Actions{
        function goOut(){
            echo "I went away";
        }
        function saySomething($text){
            echo "I said " .$text;
        }

    }



    // $house1 = new House();
    // $house2 = new House2();
    // $house1->setAddress("Maskavas 30");
    // // var_dump($house1);
    // $house1->showAddress();
    // $house2->setFloors(3);
    // $house2->address = "Prušu 30";
    // $house2->showFloors();
    // $house2->showAddress();
    // // var_dump($house2);
    // House2::showFloors();
    $house3 = new House3(2,5,"Brivibas","red",20);

   
    // var_dump($house3);
    $obj = new House4();
    $obj->saySomething("testing");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script>
        
    </script>
</body>
</html>

