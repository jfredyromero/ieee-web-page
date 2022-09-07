const API_DOMAIN = "http://localhost/ieee-web-page/api/";
const ENDPOINT_MIEMBROS = "get-miembros/";
document.addEventListener("DOMContentLoaded", () => {
	// Para movimiento lateral del timeline

	// Esta funcion se repite *action* mientras el cursor permanece *time* milisegundos sobre *element*
	function repeatWhileMouseOver(element, action, time) {
		var interval = null;
		element.addEventListener("mouseover", function () {
			interval = setInterval(action, time);
		});

		element.addEventListener("mouseout", function () {
			clearInterval(interval);
		});
	}

	// Se define la action que sucede cuando se hace hover sobre la flecha izquierda
	// En este caso hacer scroll hacia la izquierda
	const leftArrow = document.querySelector("#left-arrow");
	repeatWhileMouseOver(
		leftArrow,
		() => {
			document.querySelector("#timeline").scrollLeft -= 10;
		},
		10
	);

	// Se define la action que sucede cuando se hace hover sobre la flecha derecha
	// En este caso hacer scroll hacia la derecha
	const rightArrow = document.querySelector("#right-arrow");
	repeatWhileMouseOver(
		rightArrow,
		() => {
			document.querySelector("#timeline").scrollLeft += 10;
		},
		10
	);

	const aniosLinks = document.querySelectorAll(".year-link");
	aniosLinks.forEach(anioLink => {
		anioLink.addEventListener("click", event => {
			getMiembrosData(anioLink.dataset.id);
		});
	});

	let miembrosData = [];

	function getMiembrosData(anio) {
		fetch(API_DOMAIN + ENDPOINT_MIEMBROS + anio)
			.then(response => response.json())
			.then(data => {
				updateMiembrosData(data);
			})
			.catch(error => {
				console.log(error);
			});
	}

	function updateMiembrosData(data) {
		miembrosData = data;
		displayMiembrosData();
	}

	function displayMiembrosData() {
		document.getElementById("mosaico").innerHTML = miembrosData.map(
			miembro => {
				return miembro.primerNombre;
			}
		);
	}
});
