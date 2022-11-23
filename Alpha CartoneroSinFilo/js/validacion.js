function valida(){
	var nombre = document.getElementById('nombre');
	var email = document.getElementById('email');
	var asunto = document.getElementById('asunto');
	var comentario = document.getElementById('comentario');

	if (nombre.value == ''){
		alert('Nombre es obligatorio');
		nombre.focus();
		return false;
	}

	if(email.value == ''){
		alert('Email es Obligatorio');
        email.focus();
		return false;
	}

	if (asunto.value == '') {
		alert('Asunto es obligatorio');
		asunto.focus();
		return false;
	}

	if (comentario.value == '') {
		alert('Comentario es obligatorio');
		comentario.focus();
		return false;
	}

	return true;
	
}