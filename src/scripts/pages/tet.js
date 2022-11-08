import tet from "../../assets/img/pages/tet/logo-tet.png";
import misionTet from "../../assets/img/pages/tet/mision-tet.png";
import pinturaTet from "../../assets/img/pages/tet/pintura-tet.png";
import img1 from "../../assets/img/pages/tet/sponsors/1.webp";
import img2 from "../../assets/img/pages/tet/sponsors/2.webp";
import img3 from "../../assets/img/pages/tet/sponsors/3.webp";
import img4 from "../../assets/img/pages/tet/sponsors/4.webp";
import img5 from "../../assets/img/pages/tet/sponsors/5.webp";
import img6 from "../../assets/img/pages/tet/sponsors/6.webp";
import img7 from "../../assets/img/pages/tet/sponsors/7.webp";
import img8 from "../../assets/img/pages/tet/sponsors/8.webp";
import img9 from "../../assets/img/pages/tet/sponsors/9.webp";
import img10 from "../../assets/img/pages/tet/sponsors/10.webp";
import img11 from "../../assets/img/pages/tet/sponsors/11.webp";
import img12 from "../../assets/img/pages/tet/sponsors/12.webp";
import img13 from "../../assets/img/pages/tet/sponsors/13.webp";
import img14 from "../../assets/img/pages/tet/sponsors/14.webp";
import img15 from "../../assets/img/pages/tet/sponsors/15.webp";
import img16 from "../../assets/img/pages/tet/sponsors/16.webp";

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
	img13,
	img14,
	img15,
	img16,
];

export default () => {
	document.getElementById("logo-tet-img").src = tet;
	// document.getElementById("mision-tet-img").src = misionTet;
	// document.getElementById("pintura-tet-img").src = pinturaTet;
	// Loading Images
	let imgIndex = 0;
	Array.from(document.getElementsByClassName("sponsor-img")).forEach(
		element => {
			element.src = IMG_ARRAY[imgIndex];
			imgIndex++;
		}
	);
};
