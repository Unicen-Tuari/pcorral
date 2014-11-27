$("#link_info").submit(function() 
{
	$.ajax({
		type: "GET",
		url: "index.php",
		data:$("#form_consulta").serialize(),
		success: function(data)
		{
			if (data)
			{
				$("#mostrar_info").html(data);
			}
			$('[data-spy="scroll"]').each(function () 
			{
				var $spy = $(this).scrollspy('refresh');
			})
		}
	});
	return false;
});


$(".formulario").submit(function() 
{
	$.ajax({
		type: "GET",
		url: "index.php",
		data:$(this).serialize(),
		success: function(data)
		{
			if (data == false)
			{
				$("#descripcion_queso").html('');
			} else {
				$("#descripcion_queso").html(data);
			}
			$('[data-spy="scroll"]').each(function () 
			{
				var $spy = $(this).scrollspy('refresh');
			})
		}
	});
	return false;
});


$("#form_consulta").submit(function() 
{
	$.ajax({
		type: "GET",
		url: "index.php",
		data:$("#form_consulta").serialize(),
		success: function(data)
		{
			if (data == false)
			{
				$("#descripcion_queso").html('');
			} else {
				$("#descripcion_queso").html(data);
			}
			$('[data-spy="scroll"]').each(function () 
			{
				var $spy = $(this).scrollspy('refresh');
			})
		}
	});
	return false;
});

$("#form_mail").submit(function() 
{
	$.ajax({
		type: "POST",
		url: "index.php",
		data:$("#form_mail").serialize(),
		success: function(data)
		{
			$("#alerta_mail").html(data);
		}
	});
	return false;
});
$('#alerta_mail').on('closed.bs.alert','#alerta' , function () {
	$('#form_mail input,textarea').val('');
})

function clickComprar(idProducto){
		$.ajax({
			url  : "index.php",		//URL a la que le pegamos
			type : "post",			//metodo que usamos para enviar
			data : {				// data = objeto tipo JSON (CLAVE : VALOR)
					action: "agregarProductoCarrito", //action ->
					idProducto:idProducto				
					},

			success: function(data){ 	// que hace si el envio del JSON fue exitoso
			}
		});
	$("#modal_body").load("index.php",{idProducto:idProducto});
	$('#modal_emergente').modal('show');
	return false;

	}

function clickBorrar(idProducto){
		$.ajax({
			url  : "index.php",		//URL a la que le pegamos
			type : "post",			//metodo que usamos para enviar
			data : {				// data = objeto tipo JSON (CLAVE : VALOR)
					action: "borrarProductoCarrito", //action ->
					idProducto:idProducto				
					},

			success: function(data){ 	// que hace si el envio del JSON fue exitoso
			}
		});

	$("#modal_body").load("index.php",{idProducto:idProducto});
	$('#modal_emergente').modal('show');
	return false;

	}


$('#modal_carrito').on('click', '#m_carrito', function() 
{
	$("#modal_body").load("index.php",{idProducto:'0'});
	$('#modal_emergente').modal('show');
	return false;
});


