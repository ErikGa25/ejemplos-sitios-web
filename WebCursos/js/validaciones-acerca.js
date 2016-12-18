function validacionesForm() {
	var correo = document.getElementById('correo');
	var asunto = document.getElementById('asunto');
	var comentarios = document.getElementById('comentarios');
	var expEmail = /^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/;    /* Verifica si es un formato de correo válido */
	var expTexto = /^\s*$/;     /* Verifica si el campo esta vacío o sólo contiene espacios en blanco */
	var verificar = true;

	if (correo.value == "") {
		alert('El campo correo es obligatorio');
		correo.focus();
		verificar = false;
	}
	else if (!expEmail.test(correo.value)) {
		alert('El formato del correo no es válido');
		correo.focus();
		verificar = false;
	}
	else if (expTexto.test(asunto.value)) {
    		alert('El campo asunto es obligatorio ');
    		asunto.focus();
		verificar = false;
	}
	else if (comentarios.value == "") {
		alert('El campo comentarios es obligatorio');
		comentarios.focus();
		verificar = false;
	}
	if (verificar) {
		document.form_acerca.submit();
	}
}

window.onload = function() {
	var btn = document.form_acerca.btnEnviar;
	btn.onclick = validacionesForm;
};