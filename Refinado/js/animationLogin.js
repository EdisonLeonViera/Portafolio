const loginPag1 = `<div class="primeraPestañaLogin" id="primeraPestañaLogin">
                <button type="button" onclick="formUsuario()" class="btnElegirUsuario btnUp">Cliente</button>
                <button type="button" onclick="formUsuario()" class="btnElegirUsuario">Abogado</button>
                <button type="button" onclick="formUsuario()" class="btnElegirUsuario btnDown">Empresa</button>
                </div>`;


const estructuraFormUser= `<form class="formUserCreate" name="formUserCreate" id="formUserCreate" method="get" action="#">
						</form>`;

const formUser = `<div id="pestaña">
			<div class="divFormUser">
				<label class="labelLogin" for="nombre">Nombre:</label>
				<input class="inputLoginForm" type="text" name="nombre" id="nombre">
            </div>
            <div class="divFormUser">
				<label class="labelLogin" for="rut">R.U.T:</label>
				<input class="inputLoginForm" type="text" name="rut" id="rut">
			</div>
			<div class="divFormUser">
				<label class="labelLogin" for="fechNac">Fecha de Nacimiento:</label>
				<input class="inputLoginForm" type="date" name="fechNac" id="fechNac">
			</div>
            <div class="divFormUser">
				<label class="labelLogin" for="edad">Edad:</label>
				<input class="inputLoginForm" type="number" min=0 max=110 name="edad" id="edad">
            </div>
			
			<div class="btnCrearUser">
			<button type="button" onclick="pestaña2()" class="botonesLoginR">Next</button>
			</div>
			</div>`;

const formUser2 = `<div id="pestaña2">
			<div class="divFormUser">
				<label class="labelLogin" for="profesion">Profesion:</label>
				<input class="inputLoginForm" type="text" name="profesion" id="profesion">
			</div>
			<div class="divFormUser">
				<label class="labelLogin">Estado Civil:</label>
				<input class="inputEC" type="radio" name="estadoCivil" id="soltero" value="1">
				<label class="inputEC" for="soltero">Soltero</label>
				<input class="inputEC" type="radio" name="estadoCivil" id="casado" value="2">
				<label class="inputEC" for="casado">Casado</label>
				<input class="inputEC" type="radio" name="estadoCivil" id="divorciado" value="3">
				<label class="inputEC" for="divorciado">Divorciado</label>
				<input class="inputEC" type="radio" name="estadoCivil" id="enUnionCivil" value="4">
				<label class="inputEC" for="enUnionCivil">En union civil</label>
				<input class="inputEC" type="radio" name="estadoCivil" id="viudo" value="5">
                <label class="inputEC" for="viudo">Viudo</label>
			</div>
			 <div class="divFormUser">
				<label class="labelLogin" for="correo">Correo de contacto:</label>
				<input class="inputLoginForm" type="email" name="correo" id="correo">
			</div>
            <div class="divFormUser">
				<label class="labelLogin" for="telefono">Telefono:</label>
				<input class="inputLoginForm" type="text" name="telefono" id="telefono">
			</div>
			<div class="btnCrearUser">
			<button type="button" onclick="pestaña3()" class="botonesLoginR">Next</button>
			</div>
			</div>`;

const formUser3 = `<div id="pestaña3">
			<div class="divFormUser">
				<label class="labelLogin" for="usuario">Usuario:</label>
				<input class="inputLoginForm" type="text" name="usuario" id="usuario">
            </div>
			<div> class="divFormUser"
				<label class="labelLogin" for="contraseña">Contraseña:</label>
				<input class="inputLoginForm" type="password" name="contraseña" id="contraseña">
            </div>
            <div class="divFormUser">
				<label class="labelLogin" for="confContra">Confirmar Contraseña:</label>
				<input class="inputLoginForm" type="password" name="confContra" id="confContra">
            </div>

			<div class="btnCrearUser">
			< input class="btnCrear" type = "submit" name = "btnCrear" id = "btnCrear" value = "Crear" >
			</div >
			
			</div>`;

var inputsLogIn = document.getElementsByClassName('inputLogin');
for (var i = 0; i < inputsLogIn.length; i++) {
	inputsLogIn[i].addEventListener('keyup', function () {
		if (this.value.length >= 1) {
			this.classList.add('inputLoginFijar');
		} else {
			this.classList.remove('inputLoginFijar');
		}
	});
}

function crearUsuario() {
	document.getElementById('loginDiv').remove();
	document.getElementById('displayLogin').innerHTML = loginPag1;
}

function formUsuario() {
	document.getElementById('primeraPestañaLogin').remove();
	document.getElementById('displayLogin').innerHTML = estructuraFormUser;
	document.getElementById('formUserCreate').innerHTML = formUser;
}

function pestaña2() {
	document.getElementById('pestaña').remove();
	document.getElementById('formUserCreate').innerHTML = formUser2;
}

function pestaña3() {
	document.getElementById('pestaña2').remove();
	document.getElementById('formUserCreate').innerHTML = formUser3;
}