import Swal from "sweetalert2";
import movie from "../../assets/img/pages/events/icon-movie.svg";
import location from "../../assets/img/pages/events/icon-location.svg";
import picture from "../../assets/img/pages/events/icon-picture.svg";
import example from "../../assets/img/pages/events/example.png";

const tetText =
	"El seminario de tecnologías emergentes en telecomunicaciones es un evento reconocido tanto a nivel nacional como internacional, donde no solo podrán tener charlas de ponentes expertos en temas de innovación sino poder pasar un rato agradable y hacer recuerdos que deben tener de su época universitaria.";
const ieeeDayText =
	"Conmemora la primera vez en la historia cuando los ingenieros de todo el mundo y IEEE miembros se reunieron para compartir sus ideas técnicas en 1884. Tema: “Aprovechando la tecnología para un mejor mañana”. Este día está lleno de juegos, premios y didácticas para compartir y reír todos juntos, además de poder reunir a todas las personas de la facultad.";
const navidadFieeelizText =
	"Es poder ayudar a niños que quieren tener una sonrisa en navidad con un detalle, el año pasado se regalaron kits escolares y juguetes a niños de una vereda en el tambo.";
const diaMujerText =
	"Evento en la cual se les da el detalle a las mujeres, y todos pueden participar de muchos premios y actividades, para pasar un rato agradable y divertido; este año fue de forma virtual y se rifaron botellas de licor y bonos de comida a los ganadores.";
const diaNiñoText =
	"Se celebra con actividades, premios y más a niños en colegios por fuera y dentro de la ciudad.";
const diaMadreText =
	"Evento en la cual se les da el detalle a las mujeres, y todos pueden participar de muchos premios y actividades, para pasar un rato agradable y divertido; este año fue de forma virtual y se rifaron botellas de licor y bonos de comida a los ganadores.";
const bienvenidaPrimiparosText =
	"Es un evento donde diferentes ramas del país, se reúnen para compartir experiencias, ampliar sus conocimientos y hacer nuevas amistades.";
const ramakonText =
	"Es un evento donde diferentes ramas del país, se reúnen para compartir experiencias, ampliar sus conocimientos y hacer nuevas amistades.";

export default () => {
	// Loading Images
	Array.from(document.getElementsByClassName("movie-img")).forEach(
		element => {
			element.src = movie;
		}
	);
	Array.from(document.getElementsByClassName("location-img")).forEach(
		element => {
			element.src = location;
		}
	);
	Array.from(document.getElementsByClassName("picture-img")).forEach(
		element => {
			element.src = picture;
		}
	);
	Array.from(document.getElementsByClassName("img_event")).forEach(
		element => {
			element.src = example;
		}
	);
	// Adding pop-ups
	document.getElementById("tet-2022").addEventListener("click", () => {
		let content = document.createElement("p");
		content.classList = "text-justify";
		content.textContent = tetText;
		Swal.fire({
			title: "TET 2022",
			width: 700,
			imageWidth: 600,
			imageHeight: 400,
			imageUrl: example,
			imageAlt: example,
			html: content,
			showConfirmButton: false,
		});
	});
	document.getElementById("ieee-day").addEventListener("click", () => {
		let content = document.createElement("p");
		content.classList = "text-justify";
		content.textContent = ieeeDayText;
		Swal.fire({
			title: "IEEE Day",
			width: 700,
			imageWidth: 600,
			imageHeight: 400,
			imageUrl: example,
			imageAlt: example,
			html: content,
			showConfirmButton: false,
		});
	});
	document
		.getElementById("navidad-fieeeliz")
		.addEventListener("click", () => {
			let content = document.createElement("p");
			content.classList = "text-justify";
			content.textContent = navidadFieeelizText;
			Swal.fire({
				title: "Navidad FIEEELIZ",
				width: 700,
				imageWidth: 600,
				imageHeight: 400,
				imageUrl: example,
				imageAlt: example,
				html: content,
				showConfirmButton: false,
			});
		});
	document.getElementById("dia-mujer").addEventListener("click", () => {
		let content = document.createElement("p");
		content.classList = "text-justify";
		content.textContent = diaMujerText;
		Swal.fire({
			title: "Día de la Mujer",
			width: 700,
			imageWidth: 600,
			imageHeight: 400,
			imageUrl: example,
			imageAlt: example,
			html: content,
			showConfirmButton: false,
		});
	});
	document.getElementById("dia-niño").addEventListener("click", () => {
		let content = document.createElement("p");
		content.classList = "text-justify";
		content.textContent = diaNiñoText;
		Swal.fire({
			title: "Día del Niño",
			width: 700,
			imageWidth: 600,
			imageHeight: 400,
			imageUrl: example,
			imageAlt: example,
			html: content,
			showConfirmButton: false,
		});
	});
	document.getElementById("dia-madre").addEventListener("click", () => {
		let content = document.createElement("p");
		content.classList = "text-justify";
		content.textContent = diaMadreText;
		Swal.fire({
			title: "Día de la Madre",
			width: 700,
			imageWidth: 600,
			imageHeight: 400,
			imageUrl: example,
			imageAlt: example,
			html: content,
			showConfirmButton: false,
		});
	});
	document
		.getElementById("bienvenida-primiparos")
		.addEventListener("click", () => {
			let content = document.createElement("p");
			content.classList = "text-justify";
			content.textContent = bienvenidaPrimiparosText;
			Swal.fire({
				title: "BIEEENVENIDA de Primiparos",
				width: 700,
				imageWidth: 600,
				imageHeight: 400,
				imageUrl: example,
				imageAlt: example,
				html: content,
				showConfirmButton: false,
			});
		});
	document.getElementById("ramakon").addEventListener("click", () => {
		let content = document.createElement("p");
		content.classList = "text-justify";
		content.textContent = ramakonText;
		Swal.fire({
			title: "RAMAKON",
			width: 700,
			imageWidth: 600,
			imageHeight: 400,
			imageUrl: example,
			imageAlt: example,
			html: content,
			showConfirmButton: false,
		});
	});

	// Vertical Timeline - by CodyHouse.co
	class VerticalTimeline {
		constructor(element) {
			this.element = element;
			this.blocks =
				this.element.getElementsByClassName("cd-timeline__block");
			this.images =
				this.element.getElementsByClassName("cd-timeline__img");
			this.contents = this.element.getElementsByClassName(
				"cd-timeline__content"
			);
			this.offset = 0.8;
			this.hideBlocks();
		}
		hideBlocks() {
			if (!"classList" in document.documentElement) {
				return; // no animation on older browsers
			}
			//hide timeline blocks which are outside the viewport
			var self = this;
			for (var i = 0; i < this.blocks.length; i++) {
				(function (i) {
					if (
						self.blocks[i].getBoundingClientRect().top >
						window.innerHeight * self.offset
					) {
						self.images[i].classList.add(
							"cd-timeline__img--hidden"
						);
						self.contents[i].classList.add(
							"cd-timeline__content--hidden"
						);
					}
				})(i);
			}
		}
		showBlocks() {
			if (!"classList" in document.documentElement) {
				return;
			}
			var self = this;
			for (var i = 0; i < this.blocks.length; i++) {
				(function (i) {
					if (
						self.contents[i].classList.contains(
							"cd-timeline__content--hidden"
						) &&
						self.blocks[i].getBoundingClientRect().top <=
							window.innerHeight * self.offset
					) {
						// add bounce-in animation
						self.images[i].classList.add(
							"cd-timeline__img--bounce-in"
						);
						self.contents[i].classList.add(
							"cd-timeline__content--bounce-in"
						);
						self.images[i].classList.remove(
							"cd-timeline__img--hidden"
						);
						self.contents[i].classList.remove(
							"cd-timeline__content--hidden"
						);
					}
				})(i);
			}
		}
	}

	var verticalTimelines = document.getElementsByClassName("js-cd-timeline"),
		verticalTimelinesArray = [],
		scrolling = false;
	if (verticalTimelines.length > 0) {
		for (var i = 0; i < verticalTimelines.length; i++) {
			(function (i) {
				verticalTimelinesArray.push(
					new VerticalTimeline(verticalTimelines[i])
				);
			})(i);
		}

		//show timeline blocks on scrolling
		window.addEventListener("scroll", function (event) {
			if (!scrolling) {
				scrolling = true;
				!window.requestAnimationFrame
					? setTimeout(checkTimelineScroll, 250)
					: window.requestAnimationFrame(checkTimelineScroll);
			}
		});
	}

	function checkTimelineScroll() {
		verticalTimelinesArray.forEach(function (timeline) {
			timeline.showBlocks();
		});
		scrolling = false;
	}
};
