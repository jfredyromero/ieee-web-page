const juntadirectivaButton = document.querySelectorAll(
	".juntadirectiva__button"
);
const juntadirectivaCards = document.querySelectorAll(
	".juntadirectiva__card-image"
);
const juntaDirectivaEvents = document.querySelectorAll(".event");
const juntaDirectivaDots = document.querySelectorAll(".knob");
const timeline_title = document.querySelectorAll(".event__h2");
const juntaDirectivaImage = document.querySelectorAll(
	".juntadirectiva__card-image"
);
const juntaDirectivaButtons = document.querySelectorAll(
	".juntadirectiva__button"
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
let datosComite = {
	comite: "",
	datosCoordinador: {
		primerNombre: "",
		segundoNombre: "",
		primerApellido: "",
		segundoApellido: "",
		cargo: "",
		urlFoto: "",
	},
	datosSubcoordinador: {
		primerNombre: "",
		segundoNombre: "",
		primerApellido: "",
		segundoApellido: "",
		cargo: "",
		urlFoto: "",
	},
};

//? Dependiendo del boton seleccionado, realizar los cambios en los textos de la junta directiva

juntaDirectivaDots[0].classList.add("active");
juntaDirectivaImage[0].classList.add("juntadirectiva__active-card");

juntaDirectivaButtons[0].classList.add("juntadirectiva__active-button");

juntaDirectivaEvents.forEach((dot, index) => {
	dot.addEventListener("click", () => {
		juntaDirectivaDots.forEach((dot, index) => {
			juntaDirectivaDots[index].classList.remove("active");
			juntaDirectivaImage[index].classList.remove(
				"juntadirectiva__active-card"
			);
		});
		juntaDirectivaDots[index].classList.add("active");
		juntaDirectivaImage[index].classList.add("juntadirectiva__active-card");

		const cargo = timeline_title[index].innerHTML;

		switch (cargo.toLowerCase()) {
			case "presidente":
				getMemberData("get-presidente");
				break;
			case "vicepresidente":
				getMemberData("get-vicepresidente");
				break;
			case "secretario":
				getMemberData("get-secretario");
				break;
			case "tesorero":
				getMemberData("get-tesorero");
				break;
			case "fiscal":
				getMemberData("get-fiscal");
				break;
			default:
				break;
		}
	});
});

juntadirectivaButton.forEach(button => {
	button.addEventListener("click", e => {
		juntadirectivaButton.forEach(button => {
			button.classList.remove("juntadirectiva__active-button");
		});

		e.target.classList.add("juntadirectiva__active-button");

		switch (e.target.innerText.toLowerCase()) {
			case "presidente":
				getMemberData("get-presidente");
				break;
			case "vicepresidente":
				getMemberData("get-vicepresidente");
				break;
			case "secretario":
				getMemberData("get-secretario");
				break;
			case "tesorero":
				getMemberData("get-tesorero");
				break;
			case "fiscal":
				getMemberData("get-fiscal");
				break;
			default:
				break;
		}
	});
});

function updateMemberData(data) {
	const datos = data[0];
	datosMiembro.cargo = datos.cargo;
	datosMiembro.primerNombre = datos.primerNombre;
	datosMiembro.segundoNombre = datos.segundoNombre;
	datosMiembro.primerApellido = datos.primerApellido;
	datosMiembro.segundoApellido = datos.segundoApellido;
	datosMiembro.frase = datos.frase;
	datosMiembro.urlFoto = datos.urlFoto;
	displayMemberData();
}

function displayMemberData() {
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

function getMemberData(apiUrl) {
	fetch(domain + apiUrl)
		.then(response => response.json())
		.then(data => {
			updateMemberData(data);
		});
}

//? Cuando se hace click en alguna tarjeta cambia el tamaño de la tarjeta
juntadirectivaCards.forEach((card, index) => {
	card.addEventListener("click", e => {
		juntadirectivaCards.forEach((card, index) => {
			if (card.classList.contains("juntadirectiva__active-card")) {
				card.classList.remove("juntadirectiva__active-card");
				juntaDirectivaDots[index].classList.remove("active");
			}
		});

		card.classList.add("juntadirectiva__active-card");
		juntaDirectivaDots[index].classList.add("active");

		switch (card.dataset.card.toLowerCase()) {
			case "presidente":
				getMemberData("get-presidente");
				break;
			case "vicepresidente":
				getMemberData("get-vicepresidente");
				break;
			case "secretario":
				getMemberData("get-secretario");
				break;
			case "tesorero":
				getMemberData("get-tesorero");
				break;
			case "fiscal":
				getMemberData("get-fiscal");
				break;
			default:
				break;
		}
	});
});

//? ==========================================================================
//? =========================== Sección de comites ===========================
//? ==========================================================================

const comitesButtons = document.querySelectorAll(".comites__button");
const comitesH5 = document.querySelectorAll(".comites__h5");
comitesH5[0].parentElement.classList.add("comites__active-button");
comitesH5[0].classList.add("comites__active-h5");

const comitesButtonClick = document.querySelectorAll(".comites__button-click");

comitesButtons.forEach((button, index) => {
	button.addEventListener("click", e => {
		comitesButtons.forEach((button, index) => {
			button.classList.remove("comites__active-button");
			comitesH5[index].classList.remove("comites__active-h5");
		});
		button.classList.add("comites__active-button");
		comitesH5[index].classList.add("comites__active-h5");
		document.querySelector(".comites__nombre-comite").innerHTML =
			"Comité " + e.target.dataset.comite;
		getComiteData("get-comites/" + e.target.dataset.comite.toLowerCase());
	});
});

function getComiteData(apiUrl) {
	fetch(domain + apiUrl)
		.then(response => response.json())
		.then(data => {
			updateComiteData(data);
		});
}

function updateComiteData(data) {
	for (const member of data) {
		if (member.cargo == "Coordinador") {
			datosComite.datosCoordinador.primerNombre = member.primerNombre;
			datosComite.datosCoordinador.segundoNombre = member.segundoNombre;
			datosComite.datosCoordinador.primerApellido = member.primerApellido;
			datosComite.datosCoordinador.segundoApellido =
				member.segundoApellido;
			datosComite.datosCoordinador.urlFoto = member.urlFoto;
		} else {
			datosComite.datosSubcoordinador.primerNombre = member.primerNombre;
			datosComite.datosSubcoordinador.segundoNombre =
				member.segundoNombre;
			datosComite.datosSubcoordinador.primerApellido =
				member.primerApellido;
			datosComite.datosSubcoordinador.segundoApellido =
				member.segundoApellido;
			datosComite.datosSubcoordinador.urlFoto = member.urlFoto;
		}
	}
	displayComiteData();
}

function displayComiteData() {
	document.querySelector(".comites__coordinador-nombre").innerHTML =
		datosComite.datosCoordinador.primerNombre +
		" " +
		(datosComite.datosCoordinador.segundoNombre != null
			? datosComite.datosCoordinador.segundoNombre + " "
			: "") +
		datosComite.datosCoordinador.primerApellido +
		" " +
		datosComite.datosCoordinador.segundoApellido;
	document.querySelector("#comites-coordinador").src =
		datosComite.datosCoordinador.urlFoto;
	document.querySelector(".comites__subcoordinador-nombre").innerHTML =
		datosComite.datosSubcoordinador.primerNombre +
		" " +
		(datosComite.datosSubcoordinador.segundoNombre != null
			? datosComite.datosSubcoordinador.segundoNombre + " "
			: "") +
		datosComite.datosSubcoordinador.primerApellido +
		" " +
		datosComite.datosSubcoordinador.segundoApellido;
	document.querySelector("#comites-subcoordinador").src =
		datosComite.datosSubcoordinador.urlFoto;
}
