function validacionesForm() {
	var correo = document.getElementById('correo');
	var password = document.getElementById('pass');
	var expEmail = /^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/;
	var verificar = true;

	if (!correo.value) {
		alert('El campo correo es obligatorio');
		correo.focus();
		verificar = false;
	}
	else if (!expEmail.test(correo.value)) {
		alert('El formato del correo no es valido');
		correo.focus();
		verificar = false;
	}
	else if (!password.value) {
		alert('El campo contraseña es obligatorio');
		password.focus();
		verificar = false;
	}
	if (verificar) {
		document.form_login.submit();
	}
}

window.onload = function() {
	var btn = document.form_login.btnEntrar;
	btn.onclick = validacionesForm;
};