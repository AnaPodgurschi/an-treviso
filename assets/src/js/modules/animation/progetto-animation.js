import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

export default function progettoAnimation() {
	gsap.registerPlugin(ScrollTrigger);

	gsap.from('.progetto__img', {
		scrollTrigger: {
			start: 'top: 100%',
			trigger: '.progetto__img',
		},
		duration: 3,
		opacity: 0,
		y: 290,
		ease: 'power4.out',
	});
	gsap.from('.progetto__content p', {
		scrollTrigger: {
			start: 'top: 100%',
			trigger: '.progetto__content p',
		},
		duration: 1,
		opacity: 0,
		y: 290,
		stagger: 0.4,
		ease: 'power4.out',
	});
}
