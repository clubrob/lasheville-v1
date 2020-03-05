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
});


