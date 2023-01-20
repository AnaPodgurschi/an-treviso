import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

export default function programmaAnimation() {
	gsap.registerPlugin(ScrollTrigger);

	gsap.from('.programma__img', {
		scrollTrigger: {
			start: 'top: 100%',
			trigger: '.programma__img',
		},
		duration: 3,
		opacity: 0,
		y: 200,
		ease: 'power4.out',
	});

	gsap.from('.programma__after', {
		scrollTrigger: {
			start: 'top: 100%',
			trigger: '.programma__after',
		},
		duration: 3,
		opacity: 0,
		y: 200,
		ease: 'power4.out',
	});
}
