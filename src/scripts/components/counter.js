import circularProgressConfig from "../utilities/circular-progress-bar";

export default () => {
	let CircularProgressBar = circularProgressConfig();

	const globalConfig = {
		colorSlice: "#123f72",
		colorCircle: "#c5c5c5",
		strokeWidth: 15,
		/* e.t.c */
	};

	// get all progress bar
	const elements = document.querySelectorAll(".pie");
	// call to function
	const circle = new CircularProgressBar("pie", globalConfig);

	// https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API
	// if IntersectionObserver is supported by the browser
	if ("IntersectionObserver" in window) {
		const config = {
			threshold: 0.75,
		};

		const ovserver = new IntersectionObserver((entries, ovserver) => {
			entries.map(entry => {
				if (entry.isIntersecting && entry.intersectionRatio >= 0.75) {
					circle.initial(entry.target);
					ovserver.unobserve(entry.target);
				}
			});
		}, config);

		elements.forEach(item => {
			ovserver.observe(item);
		});
	} else {
		// if the browser does not support IntersectionObserver
		// we run all progress bars at once

		elements.forEach(item => {
			circle.observe(item);
		});
	}
};
