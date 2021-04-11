<?php

function average($notas){
  
 $result = array_sum($notas);
  
  $average = round($result / sizeof($notas), 2);
    if ($average > 6){
        return "$average [Aprovado]";
    }else{
      return "$average [Reprovado]";
    }
}

if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])){
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $notas = [$nota1, $nota2, $nota3];
  $result_average = average($notas);
}

?>

<body>
<label> <?php echo "N1=$nota1"; ?></label>
<hr>
<label> <?php echo "N2=$nota2"; ?></label>
<hr>
<label> <?php echo "N3=$nota3"; ?></label>
<hr>
<label> <?php echo "MG=$result_average"; ?></label>
    
</body>