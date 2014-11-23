$(".formulario").submit(function() 
{
	$.ajax({
		type: "GET",
		url: "listado.php",
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
		url: "listado.php",
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
		url: "contacto.php",
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