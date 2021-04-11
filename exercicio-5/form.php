<?php

function compare($numberA, $numberB){
    if ($numberA > $numberB){
        return [ $numberA, $numberB];
    }else{
      return [ $numberB, $numberA];
    }
}

if(isset($_POST['numberA']) && isset($_POST['numberB'])){
  $numberA = $_POST['numberA'];
  $numberB = $_POST['numberB'];
 
  $result = compare($numberA, $numberB);
}

?>

<body>
  <label> <?php echo "$result[0] , $result[1]"; ?></label>    
</body>