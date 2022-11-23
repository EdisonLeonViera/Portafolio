function valida() {
    // rut obligatorio
    var rut = document.getElementById('rut');
    if (rut.value == '') {
        alert('Debe completar todos los campos');
        rut.focus();
        return false;
    }
    //validacion rut sin puntos ni guion
    expRut = /^[kK0-9_-]{8,10}$/;
    if (!expRut.test(rut.value)) {
        alert('Rut no válido escriba su rut sin puntos');
        rut.focus();
        return false;
    }
    var nombre = document.getElementById('nombre');
    if (nombre.value == '') {
        alert('Debe completar todos los campos');
        nombre.focus();
        return false;
    }
    //nombre solo letras y  espacios
    var expNombre = /^[A-ZÑa-zñ\s]+$/;
    if (!expNombre.test(nombre.value)) {
        alert('Ingresa sóo letras y espacios');
        nombre.focus();
        return false;
    }
    //apellidoP validacion obligatorio
    var apellP = document.getElementById('apellidoP');
    if (apellP.value == '') {
        alert('Debe completar todos los campos');
        apellP.focus();
        return false;
    }
    //apellidoP solo letras y  espacios
    var expApellP = /^[A-ZÑa-zñ\s]+$/;
    if (!expApellP.test(expApellP.value)) {
        alert('Ingresa sólo letras y espacios');
        expApellP.focus();
        return false;
    }
    //apellidoM validacion obligatorio
    var apellM = document.getElementById('apellidoM');
    if (apellM.value == '') {
        alert('Debe completar todos los campos');
        apellM.focus();
        return false;
    }
    //apellidoM solo letras y  espacios
    var expApellM = /^[A-ZÑa-zñ\s]+$/;
    if (!expApellM.test(expApellM.value)) {
        alert('Ingresa sólo letras y espacios');
        expApellM.focus();
        return false;
    }

    var fono = document.getElementById('telefono');
    if (fono.value == '') {
        alert('Dejanos tu número para poder contactarte');
        fono.focus();
        return false;
    }
    //Validacion telefono numúrico
    var expFono = /^[0-9_+]{8,12}$/;
    if (!expFono.test(fono.value)) {
        alert('Número invalido verifique que esté escrito correctamente');
        fono.focus();
        return false;
    }
    var email = document.getElementById('correo');
    if (email.value == '') {
        alert('Dejanos tu email para poder contactarte');
        email.focus();
        return false;
    }

    var clave = document.getElementById('password');
    if (clave.value == '') {
        alert('La clave es obligatoria');
        clave.focus();
        return false;
    }
    //validar clave numérica entre 6 y 8 caracteres
    //dígitos   [0-9]   o   \d
    var expClave = /^[A-Za-z0-9]{6,15}$/;
    if (!expClave.test(clave.value)) {
        alert('La clave debe ser alfa-numérica y tener entre 6 y 15 dígitos');
        clave.focus();
        return false;
    }

}