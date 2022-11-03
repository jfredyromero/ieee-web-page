import tet from "../../assets/img/pages/tet/logo-tet.png";
import misionTet from "../../assets/img/pages/tet/mision-tet.png";
import pinturaTet from "../../assets/img/pages/tet/pintura-tet.png";
import img1 from "../../assets/img/pages/tet/sponsors/1.png";
import img2 from "../../assets/img/pages/tet/sponsors/2.png";
import img3 from "../../assets/img/pages/tet/sponsors/3.png";
import img4 from "../../assets/img/pages/tet/sponsors/4.png";
import img5 from "../../assets/img/pages/tet/sponsors/5.png";
import img6 from "../../assets/img/pages/tet/sponsors/6.png";
import img7 from "../../assets/img/pages/tet/sponsors/7.png";
// import img8 from "../../assets/img/pages/tet/sponsors/8.png";
// import img9 from "../../assets/img/pages/tet/sponsors/9.png";
// import img10 from "../../assets/img/pages/tet/sponsors/10.png";
// import img11 from "../../assets/img/pages/tet/sponsors/11.png";
// import img12 from "../../assets/img/pages/tet/sponsors/12.png";

const IMG_ARRAY = [
	img1,
	img2,
	img3,
	img4,
	img5,
	img6,
	img7,
	// img8,
	// img9,
	// img10,
	// img11,
	// img12,
];

export default () => {
	document.getElementById("logo-tet-img").src = tet;
	document.getElementById("mision-tet-img").src = misionTet;
	document.getElementById("pintura-tet-img").src = pinturaTet;
	// Loading Images
	let imgIndex = 0;
	Array.from(document.getElementsByClassName("sponsor-img")).forEach(
		element => {
			element.src = IMG_ARRAY[imgIndex];
			imgIndex++;
		}
	);
};
