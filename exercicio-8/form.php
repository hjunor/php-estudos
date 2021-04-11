<?php

function validate_age($name, $age){
  
  
    if ($age > 18){
        return "$name é maior de 18 e tem $age Anos";
    }else{
      return "$name não é maior de 18 e tem $age Anos";
    }
}

if(isset($_POST['name']) && isset($_POST['age'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $result= validate_age($name, $age);
}

?>

<body>
<label> <?php echo "$result "?></label>
<hr>

    
</body>