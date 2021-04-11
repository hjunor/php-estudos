<?php

function compare($numberA, $numberB){
    if ($numberA > $numberB){
        return 'A maior que B';
    }else{
      return 'A menor que B';
    }
}

if(isset($_POST['numberA']) && isset($_POST['numberB'])){
  $numberA = $_POST['numberA'];
  $numberB = $_POST['numberB'];
 
  $result = compare($numberA, $numberB);
}

?>

<body>
  <label> <?php echo "$result"; ?></label>    
</body>