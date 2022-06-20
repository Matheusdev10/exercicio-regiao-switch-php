<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div>

<?php

$estado = isset($_GET["est"])?$_GET["est"]: 0;
$butao = isset($_GET["btn"])?$_GET["btn"]: 0;
switch ($estado){
  case 1:
    echo "Pertence a região norte do Brasil";
    break;
   case 2:
    echo "Pertence a região nordeste do Brasil";
    break;
    case 3:
    echo "Pertence a região sudeste do Brasil";
    break;
    case 4:
    echo "Pertence a região centro-oeste do Brasil";
    break;
    case 5:
    echo "Pertence a região sul do Brasil";
    break;
  
}

?>
</div>
  
</body>
</html>