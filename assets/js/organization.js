const juntadirectivaButton = document.querySelectorAll(
	".juntadirectiva__button"
);
const juntadirectivaCards = document.querySelectorAll(
	".juntadirectiva__card-image"
);
const juntaDirectivaEvents = document.querySelectorAll(
	".event"
);
const juntaDirectivaDots = document.querySelectorAll(
	".knob"
);
const timeline_title = document.querySelectorAll(
	".event__h2"
);
const juntaDirectivaImage = document.querySelectorAll(
	".juntadirectiva__card-image"
)
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
	}
};

//? Dependiendo del boton seleccionado, realizar los cambios en los textos de la junta directiva

juntaDirectivaDots[0].classList.add("active");
juntaDirectivaImage[0].classList.add("juntadirectiva__active-card");

juntaDirectivaButtons[0].classList.add("juntadirectiva__active-button");

juntaDirectivaEvents.forEach((dot, index) => {

	dot.addEventListener('click', () => {
		juntaDirectivaDots.forEach((dot, index) => {
			juntaDirectivaDots[index].classList.remove("active");
			juntaDirectivaImage[index].classList.remove("juntadirectiva__active-card");
		});
		juntaDirectivaDots[index].classList.add("active");
		juntaDirectivaImage[index].classList.add("juntadirectiva__active-card");

		const cargo = timeline_title[index].innerHTML;

		switch (cargo.toLowerCase()) {
			case "presidente":
				getMemberData("get-presidente", "assets/img/juntaDirectiva/presidente.jpg");
				break;
			case "vicepresidente":
				getMemberData("get-vicepresidente", "assets/img/juntaDirectiva/vicepresindente.jpg");
				break;
			case "secretario":
				getMemberData("get-secretario", "assets/img/juntaDirectiva/secretario.jpg");
				break;
			case "tesorero":
				getMemberData("get-tesorero", "assets/img/juntaDirectiva/tesorero.jpg");
				break;
			case "fiscal":
				getMemberData("get-fiscal", "assets/img/juntaDirectiva/fiscal.jpg");
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
				getMemberData("get-presidente", "assets/img/juntaDirectiva/presidente.jpg");
				break;
			case "vicepresidente":
				getMemberData("get-vicepresidente", "assets/img/juntaDirectiva/vicepresindente.jpg");
				break;
			case "secretario":
				getMemberData("get-secretario", "assets/img/juntaDirectiva/secretario.jpg");
				break;
			case "tesorero":
				getMemberData("get-tesorero", "assets/img/juntaDirectiva/tesorero.jpg");
				break;
			case "fiscal":
				getMemberData("get-fiscal", "assets/img/juntaDirectiva/fiscal.jpg");
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

function getMemberData(apiUrl, photoUrl) {
	fetch(domain + apiUrl)
		.then(response => response.json())
		.then(data => {
			datosMiembro.urlFoto = photoUrl;
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
				getMemberData("get-presidente", "assets/img/juntaDirectiva/presidente.jpg");
				break;
			case "vicepresidente":
				getMemberData("get-vicepresidente", "assets/img/juntaDirectiva/vicepresindente.jpg");
				break;
			case "secretario":
				getMemberData("get-secretario", "assets/img/juntaDirectiva/secretario.jpg");
				break;
			case "tesorero":
				getMemberData("get-tesorero", "assets/img/juntaDirectiva/tesorero.jpg");
				break;
			case "fiscal":
				getMemberData("get-fiscal", "assets/img/juntaDirectiva/fiscal.jpg");
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


fetch(domain + "get-coordinadores")
	.then(response => response.json())
	.then(data => {
		const [
			coorAcademico,
			coorLogistica,
			coorPublicidad,
			coorPatrocinios,
			coorLudicas,
		] = data;
	});

// const [subAcademico, subLogistica, subPublicidad, subPatrocinios, subLudicas] =
// 	subcoordinadores;

// button.classList.remove("comites__active-button");
// comitesH5[0].classList.remove("comites__active-h5");
// button.classList.add("comites__active-button");
// comitesH5[0].classList.add("comites__active-h5");

comitesButtons.forEach((button, index) => {
	button.addEventListener("click", e => {
		comitesButtons.forEach((button, index) => {
			button.classList.remove("comites__active-button");
			comitesH5[index].classList.remove("comites__active-h5");
		});

		button.classList.add("comites__active-button");
		comitesH5[index].classList.add("comites__active-h5");

		switch (e.target.dataset.comite.toLowerCase()) {
			case "académico":

				document.querySelector(".comites__nombre-comite").innerHTML =
					"Comité Académico";

				document.querySelector(".comites__coordinador-nombre").innerHTML =
					coorAcademico.primerNombre +
					" " +
					coorAcademico.primerApellido +
					" " +
					coorAcademico.segundoApellido;
				document.querySelector(".comites__coordinador-cargo").innerHTML =
					coorAcademico.cargo;
				document.querySelector(
					".comites__subcoordinador-nombre"
				).innerHTML =
					subAcademico.primerNombre +
					" " +
					subAcademico.primerApellido +
					" " +
					subAcademico.segundoApellido;
				document.querySelector(".comites__subcoordinador-cargo").innerHTML =
					subAcademico.cargo;



				getMemberData("get-presidente", "assets/img/juntaDirectiva/presidente.jpg");
				break;
			case "publicidad":
				getMemberData("get-vicepresidente", "assets/img/juntaDirectiva/vicepresindente.jpg");
				break;
			case "logística":
				getMemberData("get-secretario", "assets/img/juntaDirectiva/secretario.jpg");
				break;
			case "patrocinios":
				getMemberData("get-tesorero", "assets/img/juntaDirectiva/tesorero.jpg");
				break;
			case "lúdicas":
				getMemberData("get-fiscal", "assets/img/juntaDirectiva/fiscal.jpg");
				break;
			default:
				break;
		}
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
	datosComite.cargo = data.cargo;
	datosComite.primerNombre = data.primerNombre;
	datosComite.segundoNombre = data.segundoNombre;
	datosComite.primerApellido = data.primerApellido;
	datosComite.segundoApellido = data.segundoApellido;
	datosComite.frase = data.frase;
	document.querySelector(".juntadirectiva__h4").innerHTML =
		datosComite.cargo;
	document.querySelector(".juntadirectiva__h3").innerHTML =
		datosComite.primerNombre +
		" " +
		(datosComite.segundoNombre != null
			? datosComite.segundoNombre + " "
			: "") +
		datosComite.primerApellido +
		" " +
		datosComite.segundoApellido;
	document.querySelector(".juntadirectiva__p").innerHTML = datosComite.frase;
	document.querySelector(".juntadirectiva__persona").src =
		datosComite.urlFoto;
}
