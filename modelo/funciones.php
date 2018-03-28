<?php
$mun= null;
$con = new mysqli("localhost", "root", "", "fibra");
if (isset($_GET['cp']))
{

  $sql="SELECT DISTINCT municipio FROM huella WHERE CP=".$_GET['cp']."";
  if ($resultado = $con->query($sql))
  {
    while($mun = $resultado->fetch_array())
    {
      echo $mun['municipio'];
    }
  }
}

 ?>
