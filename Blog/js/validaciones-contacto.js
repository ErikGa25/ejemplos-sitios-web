$(document).ready(function(){
	$("#enviar").click(function () {
		var expEmail = new RegExp(/^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/);     /* Verifica si es un formato de correo válido */
		var expTexto = new RegExp(/^\s*$/);         /* Verifica si el campo esta vacío o sólo contiene espacios en blanco */

		if ($("#correo").val() == "") {
			alert('El campo correo es obligatorio');
			$("#correo").focus();
			return false;
		}
		else if (!expEmail.test($("#correo").val())) {
			alert('El formato del correo no es válido');
			$("#correo").focus();
			return false;
		}
		else if (expTexto.test($("#asunto").val())) {
			alert('El campo asunto es obligatorio');
			$("#asunto").focus();
			return false;
		}
		else if (expTexto.test($("#mensaje").val())) {
			alert('El campo mensaje es obligatorio');
			$("#mensaje").focus();
			return false;
		}
	});
});