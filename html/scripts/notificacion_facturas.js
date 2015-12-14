JavaScript

// Validamos y activamos el Permiso para Notificar
if(Notification.permission!=="granted") {
	Notification.requestPermission();
}

// Instanciamos el botón, para que al hacer Click en el, se proceda a lanzar la Notificación o un mensaje para actualizar el Navegador
document.getElementById("btn_notificar").addEventListener("click", onNotificationButtonClick);

// Validamos si el Navegador soporta las Notificaciones en HTML 5
function onNotificationButtonClick() {
	if (!isNotificationSupported()) {
		logg("Tu navegador no soporta Notificaciones. Por favor, utiliza una versión Reciente del Navegador Google Chrome o Safari.");
	return;
	}

	// Si el Navegador soporta las Notificaciones HTML 5, entonces que proceda a Notificar
	var notificacion = new Notification("Tienes nuevos Mensajes !", {
	    icon: 'img/gmail.png',
	    body: 'Abrir Bandeja de Gmail.'
	});

	// Redireccionamos a un determinado Destino o URL al hacer click en la Notificación
	notificacion.onclick = function() {
		window.open("http://gmail.com/");
	};					
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
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
// Validamos y activamos el Permiso para Notificar
if(Notification.permission!=="granted") {
	Notification.requestPermission();
}
 
// Instanciamos el botón, para que al hacer Click en el, se proceda a lanzar la Notificación o un mensaje para actualizar el Navegador
document.getElementById("btn_notificar").addEventListener("click", onNotificationButtonClick);
 
// Validamos si el Navegador soporta las Notificaciones en HTML 5
function onNotificationButtonClick() {
	if (!isNotificationSupported()) {
		logg("Tu navegador no soporta Notificaciones. Por favor, utiliza una versión Reciente del Navegador Google Chrome o Safari.");
	return;
	}
 
	// Si el Navegador soporta las Notificaciones HTML 5, entonces que proceda a Notificar
	var notificacion = new Notification("Tienes nuevos Mensajes !", {
	    icon: 'img/gmail.png',
	    body: 'Abrir Bandeja de Gmail.'
	});
 
	// Redireccionamos a un determinado Destino o URL al hacer click en la Notificación
	notificacion.onclick = function() {
		window.open("http://gmail.com/");
	};					
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