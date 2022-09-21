import img1 from "../../assets/img/pages/yearbook/timeline/1.jpg";
import img2 from "../../assets/img/pages/yearbook/timeline/2.jpg";
import img3 from "../../assets/img/pages/yearbook/timeline/3.jpg";
import img4 from "../../assets/img/pages/yearbook/timeline/4.jpg";
import img5 from "../../assets/img/pages/yearbook/timeline/5.jpg";
import img6 from "../../assets/img/pages/yearbook/timeline/6.jpg";
import img7 from "../../assets/img/pages/yearbook/timeline/7.jpg";
import img8 from "../../assets/img/pages/yearbook/timeline/8.jpg";
import img9 from "../../assets/img/pages/yearbook/timeline/9.jpg";
import img10 from "../../assets/img/pages/yearbook/timeline/10.jpg";
import img11 from "../../assets/img/pages/yearbook/timeline/11.jpg";
import img12 from "../../assets/img/pages/yearbook/timeline/12.jpg";
import yearInterval from "../../assets/img/pages/yearbook/year-interval-icon.svg";

import { API_DOMAIN } from "../utilities/api-domain";

const ENDPOINT_MIEMBROS = "get-miembros/";
const ENDPOINT_MIEMBRO = "get-one-miembro/";
const IMG_ARRAY = [
	img1,
	img2,
	img3,
	img4,
	img5,
	img6,
	img7,
	img8,
	img9,
	img10,
	img11,
	img12,
];

export default () => {
	// Loading Images
	let imgIndex = 0;
	Array.from(document.getElementsByClassName("timeline-img")).forEach(
		element => {
			element.src = IMG_ARRAY[imgIndex];
			imgIndex++;
		}
	);
	document.getElementById("year-interval-icon-img").src = yearInterval;
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
	let miembro = {};

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
								<img class="member-img" src="${miembro.urlFoto}">
								<div class="glass-hover" data-id="${miembro.id}">
									<i class="fas fa-arrow-circle-right fa-3x" data-id="${miembro.id}"></i>
									<p data-id="${miembro.id}">Ver Más</p>
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
		const miniCards = document.querySelectorAll(".glass-hover");
		miniCards.forEach(obj => {
			obj.addEventListener("click", displayCardData);
		});
	}

	const cardViewEmptyPanel = document.querySelector("#card-view-empty-panel");
	const flipContainer = document.querySelector("#flip-container");
	const cardViewLayout = document.querySelector("#card-view-layout");
	const cardView = document.querySelector("#card-view");

	const miniCards = document.querySelectorAll(".glass-hover");
	miniCards.forEach(obj => {
		obj.addEventListener("click", displayCardData);
	});

	function displayCardData(event) {
		cardViewLayout.style.display = "flex";
		cardViewEmptyPanel.style.display = "block";
		cardView.style.display = "block";
		cardViewEmptyPanel.classList.toggle("open");
		cardViewLayout.classList.toggle("open");
		cardView.classList.toggle("open");
		let id = event.target.dataset.id;
		let loadingImg = `<div class="card-face loading-face-flex" id="card-loading"><img src="/anuario/img/icons/loading.gif" alt="loading"></div>`;
		flipContainer.innerHTML = loadingImg;
		getMiembroById(id);
	}

	function getMiembroById(id) {
		fetch(API_DOMAIN + ENDPOINT_MIEMBRO + id)
			.then(response => response.json())
			.then(data => {
				miembro = data[0];
				showMemberCard();
			})
			.catch(error => {
				console.log(error);
			});
	}

	function showMemberCard() {
		let member = miembro;
		let cargos = miembro.cargos;
		// Para seleccionar el nombre
		let nombre =
			member.nombrePreferido == 1
				? `${member.primerNombre} ${member.primerApellido}`
				: `${member.segundoNombre} ${member.primerApellido}`;
		// Para añadir aportes
		let aportes = "";
		let volComites = [];
		let coorComites = [];
		let medallas = "";
		let banderaCoor = false;
		let banderaVol = false;
		for (let cargo of cargos) {
			if (cargo.cargo == "Coordinador") {
				coorComites.push(" " + cargo.comite);
				if (!banderaCoor) {
					medallas += `<div class="medalla"><img src="${cargo.urlLogo}" title="${cargo.cargo}"></img></div>`;
					banderaCoor = true;
				}
			} else if (cargo.cargo == "Voluntario") {
				volComites.push(" " + cargo.comite);
				if (!banderaVol) {
					medallas += `<div class="medalla"><img src="${cargo.urlLogo}" title="${cargo.cargo}"></img></div>`;
					banderaVol = true;
				}
			} else {
				aportes += `<li><p>${cargo.cargo}</p></li>`;
				medallas += `<div class="medalla"><img src="${cargo.urlLogo}" title="${cargo.cargo}"></img></div>`;
			}
		}
		banderaCoor = false;
		banderaVol = false;
		if (coorComites.length > 0) {
			if (coorComites.length > 1) {
				let last_coorComites = coorComites.pop();
				aportes += `<li><p>Coordinador de comites de ${coorComites} y ${last_coorComites}.</p></li>`;
			} else {
				aportes += `<li><p>Coordinador de comite de ${coorComites}.</p></li>`;
			}
		}
		if (volComites.length > 1) {
			let last_volComites = volComites.pop();
			aportes += `<li><p>Voluntario de comites de ${volComites} y ${last_volComites}.</p></li>`;
		} else {
			aportes += `<li><p>Voluntario de comite de ${volComites}.</p></li>`;
		}
		// Para añadir TETs organizados
		let aniosMember = [];
		let aniosTet = [2000, 2004, 2007, 2010, 2013, 2016, 2019, 2022]; // Lista de TETs organizados
		let anioIngresoRama = parseInt(member.anioIngresoRama, 10);
		let anioSalidaRama = member.anioSalidaRama;
		let TeTOrganizados = [];
		for (let i = anioIngresoRama; i <= anioSalidaRama; i++) {
			aniosMember.push(i);
		}
		for (let anio of aniosMember) {
			if (aniosTet.includes(anio)) {
				TeTOrganizados.push(" " + anio);
			}
		}
		if (TeTOrganizados.length > 0) {
			if (TeTOrganizados.length > 1) {
				let last_TetOrganizados = TeTOrganizados.pop();
				aportes += `<li><p>Organización de los TeT ${TeTOrganizados} y ${last_TetOrganizados}.</p></li>`;
			} else {
				aportes += `<li><p>Organización del TeT ${TeTOrganizados}.</p></li>`;
			}
		}

		let result = `
				<div class="card-face front-face-flex">
					<div class="front-content">
						<div class="front-bg-blue">
							<img src="${member.urlFoto}" alt="" class="front-img">
							<h1>${nombre}</h1>
							<span class="big-content-line"></span>
							<p>Voluntario ${member.anioIngresoRama} - ${
			member.anioSalidaRama ? member.anioSalidaRama : "Vigente"
		}</p>
						</div>
						<h4>Aportes</h4>
						<ul>
							${aportes}
						</ul>
					</div>
					<div class="front-insignias">
						<i id="close-card" class="fas fa-times fa-2x"></i>
						<span class="big-content-line"></span>
						${medallas}
						<a href="${
							member.urlLinkedin
						}" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
						<a href="mailto:${member.correo}"><i class="fas fa-envelope fa-2x"></i></i></a>
						<div class="flex-1"></div>
						<div class="flip-icon-container flip-icon-container-right">
							<i class="fas fa-arrow-right fa-2x flip-icon flip-icon-right"></i>
						</div>
					</div>
				</div>
				<div class="card-face back-face-flex">
					<div class="back-blue-side">
						<div class="flip-icon-container flip-icon-container-left">
							<i class="fas fa-arrow-left fa-2x flip-icon flip-icon-left"></i>
						</div>
					</div>
					<div class="back-content">
						<div class="back-blue-banner">
							<h1>${member.nombreEnRama}</h1>
						</div>
						<div class="back-content-items">
							<p><i>"${member.frase}"</i></p>
							<img src="/anuario/img/icons/logoIEEEBasicBlue.svg" alt="">
						</div>
					</div>
				</div>
			`;
		flipContainer.innerHTML = result;
		const flipIcon = document.querySelectorAll(".flip-icon-container");
		flipIcon.forEach(obj => {
			obj.addEventListener("click", function () {
				flipContainer.classList.toggle("is-flipped");
			});
		});
		const closeCard = document.querySelector("#close-card");
		closeCard.addEventListener("click", closingCard);
	}

	// Funcionalidad del panel vacío
	cardViewEmptyPanel.addEventListener("click", closingCard);

	function closingCard() {
		cardViewLayout.style.display = "none";
		cardViewEmptyPanel.style.display = "none";
		cardView.style.display = "none";
		cardView.classList.toggle("open");
		cardViewEmptyPanel.classList.toggle("open");
		cardViewLayout.classList.toggle("open");
		if (flipContainer.classList.contains("is-flipped")) {
			flipContainer.classList.toggle("is-flipped");
		}
	}
};
