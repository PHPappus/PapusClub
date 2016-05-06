$(document).ready(function(){
  $('.bxslider').bxSlider();
});


$(document).ready(function(){
	$('.inputmodify').change(function(){
		document.getElementById('btn-savechanges1').disabled=false;
	});
});


function openLogin(){
	location.href="login";
}

function openHistoriaCallao(){
	location.href="historia-sede-callao-ver-mas#marca";
}

function hacerBusqueda(){
	location.href="reserva-bungalows-b-s#marca";
}
function openHistoriaPapusClub(){
	location.href="historia-papusclub-ver-mas#marca";
}



function confirmar_registro_solicitud_postulante(){
	location.href="REGISTRAR-SOLICITUD-POSTULANTE-O-AL";
}


function registrarAmbiente(){
	location.href="registrar-ambiente";
}

function modificarAmbiente(){
	location.href="modificar-ambiente";
}

function registrarNuevoUsuario(){
	location.href="usuario/create";
}

function anularReservaAmbiente(){
	location.href="anular-reserva-ambiente-s";
}

function anularReservaAmbienteB(){
	location.href="anular-reserva-ambiente-b-s";
}
function buscarAmbientes(){
	location.href="anular-reserva-ambiente-b-s";
}

function buscar_ambientes_x_user(){
	location.href="#";
}

function openTallerFutbol(){
	location.href="futbol-s";
}
function reservarBungalow(){
	location.href="reserva-bungalows-s";
}
function buscarBungalow(){
	location.href="bungalows";
}
