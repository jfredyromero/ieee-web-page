export default () => {
	const hamburger = document.querySelector(".header__button");
	const sidebar = document.querySelector(".sidebar");
	const sidebarButton = document.querySelectorAll(".sidebar__a");
	const dropdownButton = document.querySelector("#dropdown");
	hamburger.addEventListener("click", () => {
		if (sidebar.classList.contains("active")) {
			return sidebar.classList.remove("active");
		} else {
			return sidebar.classList.add("active");
		}
	});
	sidebarButton.forEach(button => {
		button.addEventListener("click", () => {
			return sidebar.classList.remove("active");
		});
	});
	dropdownButton.addEventListener("click", () => {
		document.querySelector(".header__dropdown").classList.toggle("active");
	});
};
