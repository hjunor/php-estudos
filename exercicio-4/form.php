<?php

function compare($number){
    if ($number%2 == 0){
        return 'Par';
    }else{
        return 'Impar';
    }
}

if(isset($_POST['number'])){
 $number = $_POST['number'];
 
  $result = compare($number);
}

?>

<body>
  <label> <?php echo "$result"; ?></label>    
</body>