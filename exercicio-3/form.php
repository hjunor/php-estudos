<?php

function factorial($number){

    for($result = 1; $number > 1 ; $number = $number - 1){

        $result = $result * $number;
    }

    return $result;
}

if(isset($_POST['number'])){
 $number = $_POST['number'];
 
  $result = factorial($number);
}

?>

<body>
  <label> <?php echo  "<div> $result </div>"; ?></label>    
</body>