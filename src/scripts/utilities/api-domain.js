const API_DOMAIN =
	"http://localhost" +
	(import.meta.env.VITE_PROD === "true"
		? import.meta.env.VITE_PROD_DOMAIN
		: import.meta.env.VITE_DEV_DOMAIN) +
	"api/";

export { API_DOMAIN };
