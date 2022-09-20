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
import { API_DOMAIN } from "../utilities/api-domain";

const ENDPOINT_MIEMBROS = "get-miembros/";
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
};
