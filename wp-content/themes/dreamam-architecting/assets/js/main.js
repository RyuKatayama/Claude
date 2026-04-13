/**
 * Dreamam Architecting theme scripts.
 */
(function () {
	'use strict';

	// Mobile nav toggle.
	var toggle = document.querySelector('.nav-toggle');
	var nav = document.querySelector('.main-nav');

	if (toggle && nav) {
		toggle.addEventListener('click', function () {
			var isOpen = nav.classList.toggle('is-open');
			toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
		});

		// Close on link click (mobile).
		nav.querySelectorAll('a').forEach(function (link) {
			link.addEventListener('click', function () {
				if (window.innerWidth <= 1024) {
					nav.classList.remove('is-open');
					toggle.setAttribute('aria-expanded', 'false');
				}
			});
		});
	}

	// Smooth scroll for anchor links on the same page.
	document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
		anchor.addEventListener('click', function (e) {
			var href = anchor.getAttribute('href');
			if (href === '#' || href.length < 2) { return; }
			var target = document.querySelector(href);
			if (target) {
				e.preventDefault();
				var offset = 80;
				var position = target.getBoundingClientRect().top + window.pageYOffset - offset;
				window.scrollTo({ top: position, behavior: 'smooth' });
			}
		});
	});

	// Header shadow on scroll.
	var header = document.querySelector('.site-header');
	if (header) {
		var onScroll = function () {
			if (window.pageYOffset > 4) {
				header.style.boxShadow = '0 4px 12px rgba(15, 46, 92, 0.08)';
			} else {
				header.style.boxShadow = 'none';
			}
		};
		window.addEventListener('scroll', onScroll, { passive: true });
		onScroll();
	}
})();
