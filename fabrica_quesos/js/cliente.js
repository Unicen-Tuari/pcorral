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
				alert('0 resultados encontrados');
			} else {
				$("#descripcion_queso").html(data);
			}
		}
	});
	return false;
});