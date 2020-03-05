document.addEventListener("DOMContentLoaded", function() {
	/* Mobile Menu Toggle */
	const menuToggle = document.querySelector('.menu-toggle');
	menuToggle.addEventListener('click', e => {
		document.body.classList.toggle('nav-open');
	});

	/* Scroll to Top Functionality */
	const scrollToTop = () => {
	  const c = document.documentElement.scrollTop || document.body.scrollTop;

	  if (c > 0) {
		window.requestAnimationFrame(scrollToTop);
		window.scrollTo(0, c - c / 2);
	  }
	};
	var backTopButton = document.querySelector('.back-top-button');
	backTopButton.addEventListener('click', e => {
	  e.preventDefault();
	  scrollToTop();
	});

	/* Remove links to single Testimonials */
	const testimonials = Array.from(document.querySelectorAll('.testimonial-entry-title a'));

	testimonials.forEach(element => {
		element.removeAttribute('href');
	});

	// if (document.querySelector('.testimonials-block-slider > div')) {
	// 	let slideshow = document.querySelector('.testimonials-block-slider > div');
	// 	let slides = Array.from(document.querySelectorAll('.testimonial-entry')),
	// 	slideCount = slides.length,
	// 	currentSlide = 0,
	// 	slideHeight = null,
	// 	initialHeight = slides[0].clientHeight;

	// 	/* Remove clickable links on Testimonial titles */
	// 	const testimonialTitles = Array.from(document.querySelectorAll('.testimonial-entry-title a'));
	// 	testimonialTitles.forEach(item => item.removeAttribute('href'));

	// 	/* Set initial slide state */
	// 	slides[0].classList.add('active');
	// 	slideshow.style.height = (initialHeight / 16) + 4 + 'rem';


	// 	function moveToSlide(n) {
	// 		slides[currentSlide].className = 'testimonial-entry';
	// 		currentSlide = (n + slideCount) % slideCount;
	// 		slides[currentSlide].className = 'testimonial-entry active';
	// 		slideHeight = slides[currentSlide].clientHeight;
	// 		slideshow.style.height = (slideHeight / 16) + 4 + 'rem';

	// 		window.addEventListener('resize', function(){
	// 			let resizedSlideHeight = slides[currentSlide].clientHeight;
	// 			slideshow.style.height = (resizedSlideHeight / 16) + 4 + 'rem';
	// 		});
	// 	}

	// 	function nextSlide(e){
	// 		e.preventDefault();
	// 		moveToSlide(currentSlide + 1);
	// 	};
	// 	function prevSlide(e){
	// 		e.preventDefault();
	// 		moveToSlide(currentSlide + -1);
	// 	};

	// 	const slideHandlers = {
	// 		nextSlideClick: function(element){
	// 			document.querySelector(element).addEventListener('click', nextSlide);
	// 		},
	// 		prevSlideClick: function(element){
	// 			document.querySelector(element).addEventListener('click', prevSlide);
	// 		}
	// 	}
	// 	slideHandlers.nextSlideClick('#next-slide');
	// 	slideHandlers.prevSlide('#prev-slide');

	// 	let initialX = null;
	// 	let initialY = null;
	// 	function startTouch(e) {
	// 		initialX = e.touches[0].clientX;
	// 		initialY = e.touches[0].clientY;
	// 	};
	// 	function moveTouch(e) {
	// 		if (initialX === null) {
	// 			return;
	// 		}
	// 		if (initialY === null) {
	// 			return;
	// 		}
	// 		let currentX = e.touches[0].clientX;
	// 		let currentY = e.touches[0].clientY;
	// 		let diffX = initialX - currentX;
	// 		let diffY = initialY - currentY;
	// 		if (Math.abs(diffX) > Math.abs(diffY)) {
	// 			if (diffX > 0) {
	// 				moveToSlide(currentSlide + 1);
	// 			}
	// 		else { // swiped right
	// 				moveToSlide(currentSlide + -1);
	// 			}
	// 		}
	// 		initialX = null;
	// 		initialY = null;
	// 		e.preventDefault();
	// 	};
	// }
});


