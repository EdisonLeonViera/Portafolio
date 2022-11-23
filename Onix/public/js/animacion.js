const tituloHM = `<h1 class="h2" id="titulo">Historial Medico</h1>`;
const tituloRecetas = `<h1 class="h2" id="titulo">Recetas</h1>`;
const tituloReservas = `<h1 class="h2" id="titulo">Reservas</h1>`;
const tituloExamenes = `<h1 class="h2" id="titulo">Examenes</h1>`;
const tituloReservar = `<h1 class="h2" id="titulo">Reservar</h1>`;

const historialMedicoInfo = `
<div id="info">
<div class="container">
	<div class="row mt-2 mb-2">
		<div class="col">
			<h4>Fecha:</h4>
		</div>
		<div class="col">
			<h4>Nombre:</h4>
		</div>
		<div class="col">
			<h4>Historial:</h4>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col">
			20/10/2022
		</div>
		<div class="col">
			Juan Perez
		</div>
		<div class="col">
			<button class="btn btn-primary btn-sm mb-1" type="button" data-bs-toggle="collapse"
				data-bs-target="#collapseExample" aria-expanded="false"
				aria-controls="collapseExample">
				Mostrar
			</button>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col m-1">
			<div class="collapse" id="collapseExample">
				<div class="card card-body">
					<p>Paciente masculino (de 35 años de edad) sin antecedentes. Ingresa al área
						de emergencia, acompañado de 2 familiares (madre y pareja) a las 9:00 pm, 
						por un dolor fuerte de abdomen y estomacal.De inicio súbito y carácter 
						cólico (que no cede al uso de medicamentos antiespasmódicos, ingeridos sin
						receta médica) como la buscapina.</p>

					<p>El dolor aumentó por ingerir platos de comidas grasosas. Es por ello que,
						presenta síntomas como: vómitos, náuseas, escalofríos en brazos, ambas
						piernas y dolor de cabeza, frecuente.</p>

					<p>Personal de guardia en la clínica en ese momento, le realizaron diversos
						exámenes de laboratorio y estudios como eco abdominal, tomografía de
						cráneo, rayos x del tórax, entre otros, con el fin de evaluar todos sus
						órganos.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			13/11/2005
		</div>
		<div class="col">
			Juan Perez
		</div>
		<div class="col">
			<button class="btn btn-primary btn-sm mb-1" type="button" data-bs-toggle="collapse"
				data-bs-target="#collapseExample2" aria-expanded="false"
				aria-controls="collapseExample">
				Mostrar
			</button>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col m-1">
			<div class="collapse" id="collapseExample2">
				<div class="card card-body">
					<p>Paciente portador de una diabetes mellitus, controlada con régimen (que
						sigue en forma irregular), e hipoglicemiantes orales. Desde hace unos
						dos a tres meses presenta polidipsia, poliuria y ha bajado de peso. Las
						veces que se ha controlado la glicemia, ha estado sobre 200 mg/dL. Desde
						tres días atrás comenzó a notar disuria dolorosa y poliaquiuria. También
						ha sentido un dolor sordo ubicado en la región lumbar derecha y cree
						haber tenido fiebre, pero no se la ha registrado. La orina la ha notado
						más fuerte de olor.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
`;

const recetasInfo = `<div id="info">
<div class="container">
	<div class="row mt-2 mb-2">
		<div class="col">
			<h4>Fecha:</h4>
		</div>
		<div class="col">
			<h4>Doctor:</h4>
		</div>
		<div class="col">
			<h4>Especialidad:</h4>
		</div>
		<div class="col">
			<h4>Caducidad:</h4>
		</div>
		<div class="col">
			<h4>Receta:</h4>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col">
			20/10/2022
		</div>
		<div class="col">
			Dr.Ogdal Lambusky
		</div>
		<div class="col">
			Medicina General
		</div>
		<div class="col">
			27/10/2022
		</div>
		<div class="col">
			<button class="btn btn-primary btn-sm mb-1" type="button" data-bs-toggle="collapse"
				data-bs-target="#collapseExample" aria-expanded="false"
				aria-controls="collapseExample">
				Mostrar
			</button>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col m-1">
			<div class="collapse" id="collapseExample">
				<div class="card card-body">
					<img src="img/recetas/recetaJuanPerez1.png.png" alt="..." width="100px"
						height="100px">
					<p>Receta para la recuperacion del paciente con alta en casa</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			13/11/2005
		</div>
		<div class="col">
			Dra.Juana de Arco
		</div>
		<div class="col">
			Diabetología
		</div>
		<div class="col">
			29/11/2005 (Renovable)
		</div>
		<div class="col">
			<button class="btn btn-primary btn-sm mb-1" type="button" data-bs-toggle="collapse"
				data-bs-target="#collapseExample2" aria-expanded="false"
				aria-controls="collapseExample">
				Mostrar
			</button>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col m-1">
			<div class="collapse" id="collapseExample2">
				<div class="card card-body">
					<img src="img/recetas/recetaJuanPerez2.png.png" alt="..." width="100px"
						height="100px">
					<p>Paciente debe tomar sus cuidados en el dia a dia y presentar su receta a
						renovacion mensual</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>`;

const reservasInfo = `<div id="info">
<div class="container">
	<div class="row mt-2 mb-2">
		<div class="col">
			<h4>Fecha:</h4>
		</div>
		<div class="col">
			<h4>Doctor:</h4>
		</div>
		<div class="col">
			<h4>Especialidad:</h4>
		</div>
		<div class="col">
			<h4>Estado:</h4>
		</div>
		<div class="col">
			<h4>Opcion:</h4>
		</div>
	</div>
	<div class="row mt-1" id="reserva1">
		<div class="col">
			27/10/2022
		</div>
		<div class="col">
			Dr.Ogdal Lambusky
		</div>
		<div class="col">
			Medicina General
		</div>
		<div class="col" id="estado">
			<div id="stats">Pendiente</div>
		</div>
		<div class="col">
			<button type="button" onclick="cancelar()"
				class="btn btn-primary mb-1">Cancelar</button>
			<button type="button" onclick="confirmar()"
				class="btn btn-primary mb-1">Confirmar</button>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col">
			20/11/2005
		</div>
		<div class="col">
			Dra.Juana de Arco
		</div>
		<div class="col">
			Diabetología
		</div>
		<div class="col">
			Asistio
		</div>
		<div class="col">
			<button type="button" onclick="cancelar()"
				class="btn btn-secondary mb-1" disabled>Cancelar</button>
			<button type="button" onclick="confirmar()"
				class="btn btn-secondary mb-1" disabled>Confirmar</button>
		</div>
	</div>
</div>
</div>`;

const examenesInfo = `<div id="info">
<div class="container">
	<div class="row mt-2 mb-2">
		<div class="col">
			<h4>Fecha:</h4>
		</div>
		<div class="col">
			<h4>Tipo de Examen:</h4>
		</div>
		<div class="col">
			<h4>Hora:</h4>
		</div>
		<div class="col">
			<h4>Opcion:</h4>
		</div>
	</div>
	<div class="row mt-1" id="examen">
		<div class="col">
			28/10/2022
		</div>
		<div class="col">
			Orina
		</div>
		<div class="col">
			09:45 A.M
		</div>
		<div class="col">
			<button type="button" onclick="cancelarExa()"
				class="btn btn-primary mb-1">Cancelar</button>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col">
			21/11/2005
		</div>
		<div class="col">
			Sangre
		</div>
		<div class="col">
			10:00 A.M
		</div>
		<div class="col">
			<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse"
				data-bs-target="#collapseExa" aria-expanded="false"
				aria-controls="collapseExample">
				Mostrar Resultado
			</button>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col m-1">
			<div class="collapse" id="collapseExa">
				<div class="card card-body">
					<p>Prueba Contaminada</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>`;

const reservarInfo = `<div id="info">
<div class="container">
	<div class="row mt-1" id="Toma">
		<div class="col text-center">
			<h4>Consulta Medica</h4>
			<button type="button" onclick="reservaCM()"
				class="btn btn-primary mb-1">Reservar</button>
		</div>
		<div class="col text-center">
			<h4>Examen</h4>
			<button type="button" onclick="reservaExa()"
				class="btn btn-primary mb-1">Reservar</button>
		</div>
	</div>
</div>
</div>`;

function historialMedico() {
    document.getElementById(`titulo`).remove();
    document.getElementById(`titulos`).innerHTML = tituloHM;
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = historialMedicoInfo;
}

function recetas() {
    document.getElementById(`titulo`).remove();
    document.getElementById(`titulos`).innerHTML = tituloRecetas;
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = recetasInfo;
}

function reservas() {
    document.getElementById(`titulo`).remove();
    document.getElementById(`titulos`).innerHTML = tituloReservas;
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = reservasInfo;
}

function examenes() {
    document.getElementById(`titulo`).remove();
    document.getElementById(`titulos`).innerHTML = tituloExamenes;
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = examenesInfo;
}

function reservar() {
    document.getElementById(`titulo`).remove();
    document.getElementById(`titulos`).innerHTML = tituloReservar;
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = reservarInfo;
}

const confirmado = `<div id="stats">Confirmado</div>`;

function cancelar() {
    document.getElementById(`reserva1`).remove();
}

function confirmar() {
    document.getElementById(`stats`).remove();
    document.getElementById(`estado`).innerHTML = confirmado;
}

function cancelarExa() {
    document.getElementById(`examen`).remove();
}

const reservaExamen = `<div id="info">
<div class="container text-end">
	<div class="row mt-1">
		<div class="col-2">
			<h6>Tipo de Examen:</h6>
		</div>
		<div class="col-4">
			<select class="form-select form-select-sm" aria-label=".form-select-sm example">
				<option selected>Seleccione</option>
				<option value="1">Orina</option>
				<option value="2">Sangre</option>
			</select>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col-2">
			<h6>Fecha:</h6>
		</div>
		<div class="col-4 input-group-sm">
			<input type="date" class="form-control" name="fechExa" id="fechExa" />
		</div>
	</div>
	<div class="row mt-1">
		<div class="col-2">
			<h6>Tipo de Examen:</h6>
		</div>
		<div class="col-4">
			<select class="form-select form-select-sm" aria-label=".form-select-sm example">
				<option selected>Seleccione</option>
				<option value="1">9:00 A.M</option>
				<option value="2">9:15 A.M</option>
				<option value="3">9:30 A.M</option>
				<option value="4">9:45 A.M</option>
				<option value="5">10:00 A.M</option>
				<option value="6">10:15 A.M</option>
				<option value="7">10:30 A.M</option>
				<option value="8">10:45 A.M</option>
				<option value="9">11:00 A.M</option>
			</select>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-6 text-center">
			<button type="button" class="btn btn-primary" id="liveToastBtn" onclick="examenReservado()">Reservar Examen</button>
		</div>
	</div>
</div>
</div>`;

function reservaExa() {
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = reservaExamen;
}

function examenReservado() {
    document.getElementById(`titulo`).remove();
    document.getElementById(`titulos`).innerHTML = tituloReservar;
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = reservarInfo;
    alert('Examen reservado con exito')
}

const reservaConsultaMedica = `<div id="info">
<div class="container">
	<div class="row mt-1">
		<div class="col-2">
			<h6>Especialidad:</h6>
		</div>
		<div class="col-4">
			<select class="form-select form-select-sm" aria-label=".form-select-sm example">
				<option selected>Seleccione</option>
				<option value="1">Medico General</option>
				<option value="2">Diabetología</option>
			</select>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col-2">
			<h6>Fecha:</h6>
		</div>
		<div class="col-4 input-group-sm">
			<input type="date" class="form-control" name="fechExa" id="fechExa" />
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-6 text-center">
			<button type="button" class="btn btn-primary"
				onclick="horasMedicas()">Buscar Horas</button>
		</div>
	</div>
</div>
</div>`;

function reservaCM() {
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = reservaConsultaMedica;
}

const horas = `<div id="info">
<div class="container">
	<div class="row">
		<h6>Doctor:</h6>
	</div>
	<div class="row">
		<div class="col"><button type="button" class="btn btn-primary">12:00 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">12:30 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">13:00 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">13:30 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">14:00 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">14:30 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">15:00 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">15:30 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">16:00 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">16:30 P.M</button></div>
		<div class="col"><button type="button" class="btn btn-primary">17:00 P.M</button></div>
	</div>
	<div class="row mt-2 text-center">
		<div class="col-10">
			<button type="button" class="btn btn-primary" onclick="confirmarHRerv()">Buscar Horas</button>
		</div>
	</div>
</div>
</div>`;

function horasMedicas() {
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = horas;
}

function confirmarHRerv() {
    document.getElementById(`titulo`).remove();
    document.getElementById(`titulos`).innerHTML = tituloReservar;
    document.getElementById(`info`).remove();
    document.getElementById(`marcoDeInfo`).innerHTML = reservarInfo;
    alert('Hora Medica reservada con exito')
}

const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
    toastTrigger.addEventListener('click', () => {
        const toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
    })
}