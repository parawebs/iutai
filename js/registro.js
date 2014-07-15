$(function() {

	$('.volver').click(function(e){
		e.preventDefault();
		$("#inicio").stop().scrollTo( 0,400);
	});


	$("#registrar").on('submit', function(e) {

		var datos=$(this).serialize();
		datos=datos+"&op=1";

		$.ajax({
			type: "POST",
			url: "registro.php",
			data: datos
		})
		.done(function(msg) {
		var result = JSON.parse(msg);
 		//respuesta exitosa.
 		$("#respuesta2").hide("fast");
 		$("#respuesta").hide("fast");
 		$("#respuesta").html(result);
 		$("#respuesta").show("fast");
 		})
		.fail(function() {
			$("#respuesta").hide("fast");
			$("#respuesta2").hide("fast");
			$("#respuesta2").html("Ha ocurrido un error, por favor intente nuevamente o contácte al administrador.");
			$("#respuesta2").show("fast");
		});
		return false;
	});

});


