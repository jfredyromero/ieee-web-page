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
			getMiembrosByYear(anioLink.dataset.id);
		});
	});

	let miembrosData = [];

	function getMiembrosByYear(anio) {
		fetch(API_DOMAIN + ENDPOINT_MIEMBROS + anio)
			.then(response => response.json())
			.then(data => {
				miembrosData = data;
				displayMiembrosData();
			})
			.catch(error => {
				console.log(error);
			});
	}

	function displayMiembrosData() {
		let miembrosHtml = miembrosData.map(miembro => {
			let medallas = "";
			miembro.cargos.forEach(cargo => {
				medallas += `<div class="mini-card-medalla"><img src="${cargo.urlLogo}" title="${cargo.cargo}"></img></div>`;
			});
			return `<div class="mini-card" data-id="${miembro.id}">
						<div class="bg-blue">
							<div class="img-container">
								<img class="member-img" src="https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png">
								<div class="glass-hover">
									<i class="fas fa-arrow-circle-right fa-3x"></i>
									<p>Ver Más</p>
								</div>
							</div>
							<p class="member-name">${
								miembro.nombrePreferido == 1
									? miembro.primerNombre
									: miembro.segundoNombre
							} ${miembro.primerApellido}</p>
						</div>
						<div class="insignias">
						${
							miembro.cargos.length == 1
								? `<div class="mini-card-medalla"><a href="${miembro.urlLinkedin}" target="_blank"><i class="fab fa-linkedin"></i></a></div>
						${medallas}
						<div class="mini-card-medalla"><a href="mailto:${miembro.correo}" target="_blank"><i class="fas fa-envelope"></i></a></div>`
								: miembro.cargos.length == 2
								? `${medallas}
								<div class="mini-card-medalla"><a href="mailto:${miembro.correo}" target="_blank"><i class="fas fa-envelope"></i></a></div>`
								: medallas
						}
							
						</div>
					</div>`;
		});
		document.getElementById("mini-cards-layout").innerHTML =
			miembrosHtml.join("");
	}
});
