export function goDown() {
	const btn = document.querySelector('#js-down');
	const progetto = document.querySelector('#js-progetto');

	btn.addEventListener('click', function (e) {
		e.preventDefault();
		progetto.scrollIntoView({
			behavior: 'smooth',
		});
	});
}
