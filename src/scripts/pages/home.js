import loadScrollReveal from "../utilities/scroll-reveal";
import loadCounter from "../components/counter";
import ensenar from "../../assets/img/pages/home/ensenar.png";
import mision from "../../assets/img/pages/home/mision.png";

export default () => {
	loadScrollReveal();
	loadCounter();
	document.getElementById("ensenar-img").src = ensenar;
	document.getElementById("mision-img").src = mision;
	document.getElementById("vision-img").src = mision;
	document.getElementById("valores-img").src = mision;
};
