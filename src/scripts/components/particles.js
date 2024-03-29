import { tsParticles } from "tsparticles-engine";
import { loadFull } from "tsparticles";

export default () => {
	async function loadParticles(options) {
		await loadFull(tsParticles);
		await tsParticles.load(options);
	}

	const configs = {
		interactivity: {
			detectsOn: "canvas",
			events: {
				onClick: { enable: false, mode: "push" },
				onHover: { enable: false, mode: "repulse" },
				resize: true,
			},
			modes: {
				push: { particles_nb: 4 },
				repulse: { distance: 200, duration: 0.4 },
			},
		},
		particles: {
			color: { value: "#ffffff", opacity: 1 },
			links: {
				color: "#ffffff",
				distance: 150,
				enable: true,
				opacity: 0.1,
				width: 1,
			},
			move: {
				bounce: false,
				direction: "none",
				enable: true,
				outMode: "out",
				random: false,
				speed: 2,
				straight: false,
			},
			number: { density: { enable: true, area: 800 }, value: 80 },
			opacity: { value: 0.5 },
			shape: { type: "circle" },
			size: { random: true, value: 5 },
		},
		detectRetina: true,
		style: {
			position: "absolute",
			top: 0,
			left: 0,
			width: "100%",
			height: "100vh",
		},
	};

	loadParticles(configs);
};
