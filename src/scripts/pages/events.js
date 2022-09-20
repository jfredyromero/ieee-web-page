import Swal from "sweetalert2";
import movie from "../../assets/img/pages/events/icon-movie.svg";
import location from "../../assets/img/pages/events/icon-location.svg";
import picture from "../../assets/img/pages/events/icon-picture.svg";
import example from "../../assets/img/pages/events/example.png";

export default () => {
	// Loading Images
	Array.from(document.getElementsByClassName("movie-img")).forEach(
		element => {
			element.src = movie;
		}
	);
	Array.from(document.getElementsByClassName("location-img")).forEach(
		element => {
			element.src = location;
		}
	);
	Array.from(document.getElementsByClassName("picture-img")).forEach(
		element => {
			element.src = picture;
		}
	);
	Array.from(document.getElementsByClassName("img_event")).forEach(
		element => {
			element.src = example;
		}
	);
	// Adding pop-ups
	document.getElementById("tet2022").addEventListener("click", () => {
		Swal.fire({
			title: "TET 2022",
			width: 700,
			imageWidth: 600,
			imageheigth: 400,
			imageUrl: "./ieee/assets/img/header.png",
			imageAlt: "Custom image",
			html: '<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quod labore. Architecto veniam quae ex inventore facilis laboriosam magnam ea accusantium beatae, voluptas minima explicabo. Repellat, eaque sit? Aspernatur, cupiditate!</p>',
			showConfirmButton: false,
		});
	});
	// Vertical Timeline - by CodyHouse.co
	class VerticalTimeline {
		constructor(element) {
			this.element = element;
			this.blocks =
				this.element.getElementsByClassName("cd-timeline__block");
			this.images =
				this.element.getElementsByClassName("cd-timeline__img");
			this.contents = this.element.getElementsByClassName(
				"cd-timeline__content"
			);
			this.offset = 0.8;
			this.hideBlocks();
		}
		hideBlocks() {
			if (!"classList" in document.documentElement) {
				return; // no animation on older browsers
			}
			//hide timeline blocks which are outside the viewport
			var self = this;
			for (var i = 0; i < this.blocks.length; i++) {
				(function (i) {
					if (
						self.blocks[i].getBoundingClientRect().top >
						window.innerHeight * self.offset
					) {
						self.images[i].classList.add(
							"cd-timeline__img--hidden"
						);
						self.contents[i].classList.add(
							"cd-timeline__content--hidden"
						);
					}
				})(i);
			}
		}
		showBlocks() {
			if (!"classList" in document.documentElement) {
				return;
			}
			var self = this;
			for (var i = 0; i < this.blocks.length; i++) {
				(function (i) {
					if (
						self.contents[i].classList.contains(
							"cd-timeline__content--hidden"
						) &&
						self.blocks[i].getBoundingClientRect().top <=
							window.innerHeight * self.offset
					) {
						// add bounce-in animation
						self.images[i].classList.add(
							"cd-timeline__img--bounce-in"
						);
						self.contents[i].classList.add(
							"cd-timeline__content--bounce-in"
						);
						self.images[i].classList.remove(
							"cd-timeline__img--hidden"
						);
						self.contents[i].classList.remove(
							"cd-timeline__content--hidden"
						);
					}
				})(i);
			}
		}
	}

	var verticalTimelines = document.getElementsByClassName("js-cd-timeline"),
		verticalTimelinesArray = [],
		scrolling = false;
	if (verticalTimelines.length > 0) {
		for (var i = 0; i < verticalTimelines.length; i++) {
			(function (i) {
				verticalTimelinesArray.push(
					new VerticalTimeline(verticalTimelines[i])
				);
			})(i);
		}

		//show timeline blocks on scrolling
		window.addEventListener("scroll", function (event) {
			if (!scrolling) {
				scrolling = true;
				!window.requestAnimationFrame
					? setTimeout(checkTimelineScroll, 250)
					: window.requestAnimationFrame(checkTimelineScroll);
			}
		});
	}

	function checkTimelineScroll() {
		verticalTimelinesArray.forEach(function (timeline) {
			timeline.showBlocks();
		});
		scrolling = false;
	}
};
