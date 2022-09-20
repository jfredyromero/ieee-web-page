import footer from "../../assets/img/pages/home/footer.png";
import ieeeLogo from "../../assets/img/pages/home/ieee-logo.svg";

export default () => {
	try {
		document.getElementById("footer-img").src = footer;
		Array.from(document.getElementsByClassName("ieee-logo-img")).forEach(
			element => {
				element.src = ieeeLogo;
			}
		);
	} catch (error) {
		console.warn("La página que buscas no existe.");
	}
};
