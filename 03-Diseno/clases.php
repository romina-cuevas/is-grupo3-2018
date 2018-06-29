<?php

/* Clases en un lenguaje */

class Amigos() {
	var $id;
	var $idUsuario;

	function void comentar( $string) {

	}
}

class Grupo() {
	var $id;
	var $permiso;

	function asignarPermisos() { 

	}
}

class Album() {
	var $id;
	var $nombre;

	function agregarFoto() {

	}

	function agregarNombre() {

	}

	function agregarGrupoAmigos() {

	}
}

class Foto() {
	var $id;
	var $comentario;

}

class Comentarios() {
	var $id;
	var $texto;

	function eliminar() {


	}

	function modificar() {

	}
}


class Admin() {
	var $id;
	var $nombre;
	var $email;
	var $contraseña;

	function eliminarComentario() {

	}

	function eliminarUsuario() {

	}

	function dejarComentario() {

	}
}

class Muro() {
	var $id;
	var $permisos;

	function asignarPermisos() {

	}
}


class Usuario() {
	var $id;
	var $nombre;
	var $apellido;
	var $email;
	var $nickname;
	var $contraseña;
	var $fechaNacimiento;

	function aceptarRechazarSolicitud() {

	}

	function buscarUsuario() {

	}

	function eliminarAmigo() {

	}

	function invitarAmigos() {

	}

	function crearGrupo() {

	}

	function asignarPermisosGrupo() {

	}

	function eliminarComentarios() {

	}

}


class Solicitud() {
	var $id;
	var $nickReceptor;
	var $mailReceptor;
	var $estado;
	var $nickEmisor;

	function aceptar() {

	}

	function rechazar() {

	}
}


class Notificacion() {
	var $id;
	var $tipoNotificacion;

	function informar() {

	}
}

?>

