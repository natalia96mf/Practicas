<?php
include_once("../modelo/line_conect.php");//incluye la conexion
include_once("../modelo/codPost.php");//incluye modelo codPost
include_once("../modelo/municipio.php");
$cp = $_POST['cp'];//recibe el nombre a buscar
$objpcp=new codPost();
$consulta=$objpcp->get_CP($cp);// se llama a la funcion

//----------CONSULTA CP------->
if($consulta){
	foreach ($consulta as $rsCP) {


		// se remplaza el termino buscado por el nombre del producto traido de la base de datos (reemplza termino a negrita)
		$cp = str_replace($cp, '<b>'.$cp.'</b>', $rsCP['cp']);
		// se agrega una nueva opcion a la lista, se indica id, y nombre
	    echo '<li onclick="set_item('.$rsCP['id'].','.'\''.str_replace("'", "\'", $rsCP['cp']).'\')">'.$cp.'</li>';
   }
}else{
	echo '<li>'."No hay resultados".'</li>';
}
?>
