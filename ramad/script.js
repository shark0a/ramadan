const form = document.querySelector('form');
const nameInput = document.querySelector('#name');

form.addEventListener('submit', (event) => {
	event.preventDefault();
	const name = nameInput.value.trim();
	if (name.length > 0) {
		form.submit();
	}
});
