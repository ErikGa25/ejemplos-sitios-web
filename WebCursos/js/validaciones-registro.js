$(document).ready(function(){
	$("#registro").click(function () {
		var expEmail = new RegExp(/^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/);     /* Verifica si es un formato de correo válido */
		var expTexto = new RegExp(/^\s*$/);         /* Verifica si el campo esta vacío o sólo contiene espacios en blanco */
		var expNumeros = new RegExp(/^\d*$/);  /* Verifica que solo se ingresen números */ 

		if (expTexto.test($("#nombre").val())) {
			alert('El campo nombre es obligatorio');
			$("#nombre").focus();
			return false;
		}
		else if ($("#telefono").val() == "") {
			alert('El campo telefono es obligatorio');
			$("#telefono").focus();
			return false;
		}
		else if (!expNumeros.test($("#telefono").val())) {
			alert('Sólo puede ingresar números');
			$("#telefono").focus();
			return false;
		}
		else if ($("#correo").val() == "") {
			alert('El campo correo es obligatorio');
			$("#correo").focus();
			return false;
		}
		else if (!expEmail.test($("#correo").val())) {
			alert('El formato del correo no es válido');
			$("#correo").focus();
			return false;
		}
		else if ($("#pass").val() == "") {
			alert('El campo contraseña es obligatorio');
			$("#pass").focus();
			return  false;
		}
	});
});