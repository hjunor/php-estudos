<?php

function mutiplication_table($number, $table){

    function mutiplication($number, $index){
        return ( $number * $index);
    }
   $array_number = [$number, $number, $number, $number,$number,$number,$number,$number,$number,$number, $number];

   return array_map("mutiplication",$table, $array_number );

}

if(isset($_POST['number'])){
 $number = $_POST['number'];
 $table = [0,1, 2, 3, 4, 5, 6, 7, 8, 9 , 10];

  $result = mutiplication_table($number, $table);
}

?>

<body>
  <label> <?php   
  for($i = 0; $i < 11; $i++){
    echo (" <div> $table[$i] X $number = $result[$i]");
  }
  ?></label>    
</body>