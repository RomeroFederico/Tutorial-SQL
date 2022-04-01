var seleccion = "";
var array_infos = undefined;

function inicializar_botones() {
	var botones = obtener_botones();

	for (var i = 0; i < botones.length; i++) {
		botones[i].addEventListener("click", seleccionar_del_menu);
	}
}

function obtener_botones() {
	var botones = document.getElementsByTagName("h3");
	return botones;
}

function clear_botones() {

	var botones = obtener_botones();

	for (var i = 0; i < botones.length; i++) {
		botones[i].classList.remove("iluminar");
	}
}

function obtener_info() {
	if (array_infos === undefined)
		array_infos = document.getElementsByClassName("indice");
	return array_infos;
}

function mostrar(id) {
	var info = document.getElementById(id);
	info.scrollIntoView();
}

function seleccionar_del_menu(event) {
	var id = event.currentTarget.id;
	var boton = document.getElementById(id);
	var seleccion = id.replace("btn", "info");

	clear_botones();

	boton.classList.add("iluminar");

	mostrar(seleccion);
}

inicializar_botones();