<?php
$q = $_GET['id'];

include "../conexion.php";

$sql="SELECT `ID_TECNICO` FROM `tecnico` WHERE `ID_TECNICO` = '".$q."'";
$result = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($result, MYSQLI_NUM);

if($row[0]){
  echo "1";
}else{
  echo "0";
}


mysqli_close($conect);
?>
