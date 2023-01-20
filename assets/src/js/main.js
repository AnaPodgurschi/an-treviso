import { mainMenu } from './modules/header/mainMenu';
import fixedHeader from './modules/header/fixedHeader';
import { goDown } from './modules/go-down';
import progettoAnimation from './modules/animation/progetto-animation';
import membergAnimation from './modules/animation/members-animation';
import programmaAnimation from './modules/animation/programma-animation';
import membersTitleAnimation from './modules/animation/members-title';

document.addEventListener('DOMContentLoaded', function () {
	// streetMap();
	mainMenu();
	fixedHeader();
	if (document.querySelector('#js-down')) {
		goDown();
	}
	if (window.innerWidth > 768) {
		// if (document.querySelector('.progetto')) {
		// 	progettoAnimation();
		// }
		if (document.querySelector('.memberg')) {
			membergAnimation();
		}
		if (document.querySelector('.memberg__title')) {
			membersTitleAnimation();
		}
		// if (document.querySelector('.programma__img')) {
		// 	programmaAnimation();
		// }
	}
});
