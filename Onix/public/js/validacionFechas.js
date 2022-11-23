function validaFecha() {
    var especialidad = document.getElementById('especialidad');
    if (especialidad.value == '') {
        alert('Debe completar todos los campos');
        especialidad.focus();
        return false;
    }

    var fechaConsulta = document.getElementById('fechaConsulta');
    if (fechaConsulta.value == '') {
        alert('Debe completar todos los campos');
        fechaConsulta.focus();
        return false;
    }

    var doctor = document.getElementById('doctor');
    if (doctor.value == '') {
        alert('Debe completar todos los campos');
        doctor.focus();
        return false;
    }

    var hora = document.getElementById('hora');
    if (hora.value == '') {
        alert('Debe completar todos los campos');
        hora.focus();
        return false;
    }
}