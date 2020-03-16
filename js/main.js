document.addEventListener("DOMContentLoaded", function () {
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

	/* Homepage Hero Fader */
	if (document.querySelector('body.home')) {
		let bgHeroes = Array.from(document.querySelectorAll('.home-heroes .blocks-gallery-item'));
		bgHeroes[0].classList.add('show');

		let bgCount = 1;
		setInterval(e => {
			if (bgCount < bgHeroes.length) {
				bgHeroes[bgCount - 1].classList.remove('show');
				bgHeroes[bgCount].classList.add('show');
				bgCount++;
				return;
			}
			bgHeroes[bgHeroes.length - 1].classList.remove('show');
			bgHeroes[0].classList.add('show');
			bgCount = 1;
		}, 5000);
	}
});


