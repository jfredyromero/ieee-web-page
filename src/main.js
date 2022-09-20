// Styles
import "./styles/main.scss";

// Scripts
import loadParticles from "./scripts/components/particles";

import loadImages from "./scripts/utilities/img-loading";

import loadHome from "./scripts/pages/home";
import loadEvents from "./scripts/pages/events";
import loadTet from "./scripts/pages/tet";
import load404 from "./scripts/pages/404";
import loadYearbook from "./scripts/pages/yearbook";
import loadOrganization from "./scripts/pages/organization";

import "./scripts/vendors/font-awesome.js";

// GSAP - SCROLL-TRIGGER
// import "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js";
// import "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js";
// import "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js";

const init = () => {
	loadImages();
	loadParticles();
	const PAGE = document.querySelector('meta[name="abstract"]').content;
	switch (true) {
		case PAGE.includes("inicio"):
			loadHome();
			break;
		case PAGE.includes("eventos"):
			loadEvents();
			break;
		case PAGE.includes("TET"):
			loadTet();
			break;
		case PAGE.includes("anuario"):
			loadYearbook();
			break;
		case PAGE.includes("galeria"):
			loadHome();
			break;
		case PAGE.includes("organización"):
			loadOrganization();
			break;
		default:
			load404();
			break;
	}
};
window.addEventListener("load", init);
