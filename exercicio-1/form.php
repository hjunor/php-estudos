<?php

function compare($number){
    if ($number > 0){
        return 'Positivo';
    }elseif($number == 0){
        return 'Zero';
    }else{
        return 'Negativo';
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