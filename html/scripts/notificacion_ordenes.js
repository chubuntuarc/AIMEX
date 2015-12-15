// Validamos y activamos el Permiso para Notificar
if(Notification.permission!=="granted") {
	Notification.requestPermission();
}

// Validamos si el Navegador soporta las Notificaciones en HTML 5
window.onload = function onNotificationButtonClick() {
	if (!isNotificationSupported()) {
		logg("Tu navegador no soporta Notificaciones. Por favor, utiliza una versión Reciente del Navegador Google Chrome o Safari.");
	return;
	}

	// Si el Navegador soporta las Notificaciones HTML 5, entonces que proceda a Notificar
	var notificacion = new Notification("¿Buscas alguna orden?", {
	    icon: 'images/notificacion.png',
	    body: 'Nueva herramienta de búsqueda.'
	});

	// Redireccionamos a un determinado Destino o URL al hacer click en la Notificación
	/*notificacion.onclick = function() {
		open("http://localhost/aimex/html/facturas.php");
	};					*/
}
		
// Solicitamos los Permisos del Sistema
function requestPermissions() {

}

// Luego del Permiso del Sistema, le indicamos que nos Muestre la Notificación
window.load = function isNotificationSupported() {
	return ("Notification" in window);
}

// Mostramos el Mensaje de la Notificación
function logg(mensaje) {
	notificador.innerHTML += "<p>"+mensaje+"</p>";
}
// Validamos y activamos el Permiso para Notificar
if(Notification.permission!=="granted") {
	Notification.requestPermission();
}

// Validamos si el Navegador soporta las Notificaciones en HTML 5
window.load = function onNotificationButtonClick() {
	if (!isNotificationSupported()) {
		logg("Tu navegador no soporta Notificaciones. Por favor, utiliza una versión Reciente del Navegador Google Chrome o Safari.");
	return;
	}
 
	// Si el Navegador soporta las Notificaciones HTML 5, entonces que proceda a Notificar

 
	// Redireccionamos a un determinado Destino o URL al hacer click en la Notificación
				
}
		
// Solicitamos los Permisos del Sistema
function requestPermissions() {
 
}
 
// Luego del Permiso del Sistema, le indicamos que nos Muestre la Notificación
function isNotificationSupported() {
	return ("Notification" in window);
}
 
// Mostramos el Mensaje de la Notificación
function logg(mensaje) {
	notificador.innerHTML += "<p>"+mensaje+"</p>";
}