const API_DOMAIN =
	(import.meta.env.VITE_PROD == "true"
		? "http://ieee.unicauca.edu.co" +import.meta.env.VITE_PROD_DOMAIN
		: "http://localhost" + import.meta.env.VITE_DEV_DOMAIN) +
	"api/";

export { API_DOMAIN };
