$(function() {
$.getJSON( "api/index.php/count", function( data ) {
	$("#circulo").html(data.counter);
});
	$('.volver').click(function(e){
		e.preventDefault();
		$("#inicio").stop().scrollTo( 0,400);
	});


	$("#registrar").on('submit', function(e) {

		var datos=$(this).serialize();
		datos=datos+"&op=1";
		console.log(datos);
		$.ajax({
			type: "POST",
			url: "api/index.php/guardar",
			data: datos
		})
		.done(function(msg) {
		var result = JSON.parse(msg);
	 		//respuesta exitosa.
	 		$("#circulo").html(result.counter);
	 		$("#respuesta").html(result.mensaje);
	 		$("#respuesta2").hide("fast");
	 		$("#respuesta").hide("fast");
	 		$("#respuesta").html(result);
	 		$("#respuesta").show("fast");
	 		$("#circulo").html(result.counter);
	 		$("#respuesta").html(result.mensaje);
	 		$('#registrar').trigger("reset");
 		})
		.fail(function() {
			$("#respuesta2").html(result.mensaje);
			$("#respuesta").hide("fast");
			$("#respuesta2").hide("fast");
			$("#respuesta2").html("Ha ocurrido un error, por favor intente nuevamente o contácte al administrador.");
			$("#respuesta2").show("fast");
		});
		return false;
	});

});



