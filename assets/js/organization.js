const juntadirectivaButton = document.querySelectorAll(
	".juntadirectiva__button"
);
const juntadirectivaCards = document.querySelectorAll(
	".juntadirectiva__card-image"
);
const domain = "http://localhost/ieee-web-page/api/";
let datosMiembro = {
	primerNombre: "",
	segundoNombre: "",
	primerApellido: "",
	segundoApellido: "",
	frase: "",
	urlFoto: "",
};
//? Dependiendo del boton seleccionado, realizar los cambios en los textos de la junta directiva
juntadirectivaButton.forEach(button => {
	button.addEventListener("click", e => {
		juntadirectivaButton.forEach(button => {
			button.classList.remove("juntadirectiva__active-button");
		});
		e.target.classList.add("juntadirectiva__active-button");

		if (e.target.innerText === "Presidente") {
			fetch(domain + "get-presidente")
				.then(response => response.json())
				.then(data => {
					datosMiembro.urlFoto =
						"assets/img/juntaDirectiva/presidente.jpg";
					updateMemberData(data);
				});
		} else if (e.target.innerText === "Vicepresidente") {
			fetch(domain + "get-vicepresidente")
				.then(response => response.json())
				.then(data => {
					datosMiembro.urlFoto =
						"assets/img/juntaDirectiva/vicepresidente.jpeg";
					updateMemberData(data);
				});
		} else if (e.target.innerText === "Secretario") {
			fetch(domain + "get-secretario")
				.then(response => response.json())
				.then(data => {
					datosMiembro.urlFoto =
						"assets/img/juntaDirectiva/secretario.jpg";
					updateMemberData(data);
				});
		} else if (e.target.innerText === "Tesorero") {
			fetch(domain + "get-tesorero")
				.then(response => response.json())
				.then(data => {
					datosMiembro.urlFoto =
						"assets/img/juntaDirectiva/tesorero.jpg";
					updateMemberData(data);
				});
		} else if (e.target.innerText === "Fiscal") {
			fetch(domain + "get-fiscal")
				.then(response => response.json())
				.then(data => {
					datosMiembro.urlFoto =
						"assets/img/juntaDirectiva/fiscal.jpg";
					updateMemberData(data);
				});
		}
	});
});

function updateMemberData(data) {
	datosMiembro.cargo = data.cargo;
	datosMiembro.primerNombre = data.primerNombre;
	datosMiembro.segundoNombre = data.segundoNombre;
	datosMiembro.primerApellido = data.primerApellido;
	datosMiembro.segundoApellido = data.segundoApellido;
	datosMiembro.frase = data.frase;
	document.querySelector(".juntadirectiva__h4").innerHTML =
		datosMiembro.cargo;
	document.querySelector(".juntadirectiva__h3").innerHTML =
		datosMiembro.primerNombre +
		" " +
		(datosMiembro.segundoNombre != null
			? datosMiembro.segundoNombre + " "
			: "") +
		datosMiembro.primerApellido +
		" " +
		datosMiembro.segundoApellido;
	document.querySelector(".juntadirectiva__p").innerHTML = datosMiembro.frase;
	document.querySelector(".juntadirectiva__persona").src =
		datosMiembro.urlFoto;
}

//? Cuando se hace click en alguna tarjeta cambia el tamaño de la tarjeta
juntadirectivaCards.forEach((card, index) => {
	card.addEventListener("click", e => {
		juntadirectivaCards.forEach((card, index) => {
			if (card.classList.contains("juntadirectiva__active-card")) {
				card.classList.remove("juntadirectiva__active-card");
			}
		});

		card.classList.add("juntadirectiva__active-card");

		if (card.dataset.card === "presidente") {
			fetch(domain + "get-presidente")
				.then(response => response.json())
				.then(data => {
					updateMemberData(data);
				});
		} else if (card.dataset.card === "vicepresidente") {
			fetch(domain + "get-vicepresidente")
				.then(response => response.json())
				.then(data => {
					updateMemberData(data);
				});
		} else if (card.dataset.card === "secretario") {
			fetch(domain + "get-secretario")
				.then(response => response.json())
				.then(data => {
					updateMemberData(data);
				});
		} else if (card.dataset.card === "tesorero") {
			fetch(domain + "get-tesorero")
				.then(response => response.json())
				.then(data => {
					updateMemberData(data);
				});
		} else if (card.dataset.card === "fiscal") {
			// document.querySelector(".juntadirectiva__h4").innerHTML =
			// 	fiscal.cargo;
			// document.querySelector(".juntadirectiva__h3").innerHTML =
			// 	fiscal.primerNombre +
			// 	" " +
			// 	fiscal.primerApellido +
			// 	" " +
			// 	fiscal.segundoApellido;
			// document.querySelector(".juntadirectiva__p").innerHTML =
			// 	fiscal.frase;
			fetch(domain + "get-fiscal")
				.then(response => response.json())
				.then(data => {
					updateMemberData(data);
				});
		}
	});
});

//? Sección de comites

// const comitesButtons = document.querySelectorAll(".comites__button");
// const comitesH5 = document.querySelectorAll(".comites__h5");
// const comitesButtonClick = document.querySelectorAll(".comites__button-click");

// const [
// 	coorAcademico,
// 	coorLogistica,
// 	coorPublicidad,
// 	coorPatrocinios,
// 	coorLudicas,
// ] = coordinadores;
// const [subAcademico, subLogistica, subPublicidad, subPatrocinios, subLudicas] =
// 	subcoordinadores;

// comitesButtons.forEach((button, index) => {
// 	button.addEventListener("click", e => {
// 		comitesButtons.forEach((button, index) => {
// 			button.classList.remove("comites__active-button");
// 			comitesH5[index].classList.remove("comites__active-h5");
// 		});

// 		button.classList.add("comites__active-button");
// 		comitesH5[index].classList.add("comites__active-h5");

// 		if (
// 			e.target.innerText === "Académico" ||
// 			e.target.dataset.comite === "academico"
// 		) {
// 			document.querySelector(".comites__nombre-comite").innerHTML =
// 				"Comité Académico";

// 			document.querySelector(".comites__coordinador-nombre").innerHTML =
// 				coorAcademico.primerNombre +
// 				" " +
// 				coorAcademico.primerApellido +
// 				" " +
// 				coorAcademico.segundoApellido;
// 			document.querySelector(".comites__coordinador-cargo").innerHTML =
// 				coorAcademico.cargo;
// 			document.querySelector(
// 				".comites__subcoordinador-nombre"
// 			).innerHTML =
// 				subAcademico.primerNombre +
// 				" " +
// 				subAcademico.primerApellido +
// 				" " +
// 				subAcademico.segundoApellido;
// 			document.querySelector(".comites__subcoordinador-cargo").innerHTML =
// 				subAcademico.cargo;
// 		} else if (
// 			e.target.innerText === "Publicidad" ||
// 			e.target.dataset.comite === "publicidad"
// 		) {
// 			document.querySelector(".comites__nombre-comite").innerHTML =
// 				"Comité de publicidad";

// 			document.querySelector(".comites__coordinador-nombre").innerHTML =
// 				coorPublicidad.primerNombre +
// 				" " +
// 				coorPublicidad.primerApellido +
// 				" " +
// 				coorPublicidad.segundoApellido;
// 			document.querySelector(".comites__coordinador-cargo").innerHTML =
// 				coorPublicidad.cargo;
// 			document.querySelector(
// 				".comites__subcoordinador-nombre"
// 			).innerHTML =
// 				subPublicidad.primerNombre +
// 				" " +
// 				subPublicidad.primerApellido +
// 				" " +
// 				subPublicidad.segundoApellido;
// 			document.querySelector(".comites__subcoordinador-cargo").innerHTML =
// 				subPublicidad.cargo;
// 		} else if (
// 			e.target.innerText === "Logística" ||
// 			e.target.dataset.comite === "logistica"
// 		) {
// 			document.querySelector(".comites__nombre-comite").innerHTML =
// 				"Comité de logística";

// 			document.querySelector(".comites__coordinador-nombre").innerHTML =
// 				coorLogistica.primerNombre +
// 				" " +
// 				coorLogistica.primerApellido +
// 				" " +
// 				coorLogistica.segundoApellido;
// 			document.querySelector(".comites__coordinador-cargo").innerHTML =
// 				coorLogistica.cargo;
// 			document.querySelector(
// 				".comites__subcoordinador-nombre"
// 			).innerHTML =
// 				subLogistica.primerNombre +
// 				" " +
// 				subLogistica.primerApellido +
// 				" " +
// 				subLogistica.segundoApellido;
// 			document.querySelector(".comites__subcoordinador-cargo").innerHTML =
// 				subLogistica.cargo;
// 		} else if (
// 			e.target.innerText === "Patrocinios" ||
// 			e.target.dataset.comite === "patrocinios"
// 		) {
// 			document.querySelector(".comites__nombre-comite").innerHTML =
// 				"Comité de patrocinios";

// 			document.querySelector(".comites__coordinador-nombre").innerHTML =
// 				coorPatrocinios.primerNombre +
// 				" " +
// 				coorPatrocinios.primerApellido +
// 				" " +
// 				coorPatrocinios.segundoApellido;
// 			document.querySelector(".comites__coordinador-cargo").innerHTML =
// 				coorPatrocinios.cargo;
// 			document.querySelector(
// 				".comites__subcoordinador-nombre"
// 			).innerHTML =
// 				subPatrocinios.primerNombre +
// 				" " +
// 				subPatrocinios.primerApellido +
// 				" " +
// 				subPatrocinios.segundoApellido;
// 			document.querySelector(".comites__subcoordinador-cargo").innerHTML =
// 				subPatrocinios.cargo;
// 		} else if (
// 			e.target.innerText === "Lúdicas" ||
// 			e.target.dataset.comite === "ludicas"
// 		) {
// 			document.querySelector(".comites__nombre-comite").innerHTML =
// 				"Comité de lúdicas";

// 			document.querySelector(".comites__coordinador-nombre").innerHTML =
// 				coorLudicas.primerNombre +
// 				" " +
// 				coorLudicas.primerApellido +
// 				" " +
// 				coorLudicas.segundoApellido;
// 			document.querySelector(".comites__coordinador-cargo").innerHTML =
// 				coorLudicas.cargo;
// 			document.querySelector(
// 				".comites__subcoordinador-nombre"
// 			).innerHTML =
// 				subLudicas.primerNombre +
// 				" " +
// 				subLudicas.primerApellido +
// 				" " +
// 				subLudicas.segundoApellido;
// 			document.querySelector(".comites__subcoordinador-cargo").innerHTML =
// 				subLudicas.cargo;
// 		}
// 	});
// });
