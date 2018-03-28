function autocompletar() {
	var min_length = 0; // variable length
	var cp = $('#cp').val();//obtener el nombre y/o termino de busqeuda
	if (cp.length >= min_length) {
		$.ajax({
			url: 'controlador/proceso_busqueda.php',
			type: 'POST',
			data: {cp:cp},
			success:function(data){
				$('#lista').show();//mistrar la lista
				$('#lista').html(data);//mostrar resultado de consulta en la lista
			}
		});
	} else {
		$('#lista').hide();
	}
}

// funcion que setea valores a los input despues de busqueda
function set_item(id,item) {
	// setear valor al imput id y nombre
	$('#cp').val(item);
	$('#id').val(id);

	// ocultar la lista
	$('#lista').hide();
}
