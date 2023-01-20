import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

export default function membergAnimation() {
	gsap.registerPlugin(ScrollTrigger);

	gsap.from('.memberg__item', {
		scrollTrigger: {
			start: 'top: 100%',
			trigger: '.memberg__item',
		},
		duration: 3,
		opacity: 0,
		rotateY: -90,
		ease: 'power4.out',
		stagger: 0.5
	});
}
