import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

export default function membersTitleAnimation() {
	gsap.registerPlugin(ScrollTrigger);

	gsap.from('.memberg__title img', {
		scrollTrigger: {
			start: 'top: 100%',
			trigger: '.memberg__title img',
		},
		duration: 2,
		opacity: 0,
		rotateY: 180,
		stagger: 0.1,
		ease: 'power4.out',
	});
}
