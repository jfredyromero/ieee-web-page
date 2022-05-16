
const juntadirectivaButton = document.querySelectorAll('.juntadirectiva__button');
const juntadirectivaCards = document.querySelectorAll('.juntadirectiva__card-image');

//? Desestructuración de los elementos del array 'juntaDirectiva'
const [presidente, vicepresidente, secretario, tesorero, fiscal] = juntaDirectiva;

//? Determinar si alguno de los cargos de junta directiva no vienen definidos en el array 'juntaDirectiva'
//? Entonces, deshabilitar los botones respectivos
juntadirectivaButton.forEach((button, index) => {
	if (juntaDirectiva[index] === undefined) {
		button.disabled = true;
		button.classList.add('disabled-button');
	}
})

//? Dependiendo del boton seleccionado, realizar los cambios en los textos de la junta directiva
juntadirectivaButton.forEach((button) => {
	button.addEventListener('click', (e) => {
		juntadirectivaButton.forEach((button) => {
			button.classList.remove('active-button');
		});
		e.target.classList.add('active-button');

		if (e.target.innerText === 'Presidente') {
			document.querySelector('.juntadirectiva__h4').innerHTML = presidente.cargo;
			document.querySelector('.juntadirectiva__h3').innerHTML = presidente.primerNombre + ' ' + presidente.primerApellido + ' ' + presidente.segundoApellido;
			document.querySelector('.juntadirectiva__p').innerHTML = presidente.frase;
			document.querySelector('.juntadirectiva__persona').src = 'assets/img/juntaDirectiva/presidente.jpg';
		} else if (e.target.innerText === 'Vicepresidente') {
			document.querySelector('.juntadirectiva__h4').innerHTML = vicepresidente.cargo;
			document.querySelector('.juntadirectiva__h3').innerHTML = vicepresidente.primerNombre + ' ' + vicepresidente.primerApellido + ' ' + vicepresidente.segundoApellido;
			document.querySelector('.juntadirectiva__p').innerHTML = vicepresidente.frase;
			document.querySelector('.juntadirectiva__persona').src = 'assets/img/juntaDirectiva/vicepresidente.jpeg';
		} else if (e.target.innerText === 'Secretario') {
			document.querySelector('.juntadirectiva__h4').innerHTML = secretario.cargo;
			document.querySelector('.juntadirectiva__h3').innerHTML = secretario.primerNombre + ' ' + secretario.primerApellido + ' ' + secretario.segundoApellido;
			document.querySelector('.juntadirectiva__p').innerHTML = secretario.frase;
			document.querySelector('.juntadirectiva__persona').src = 'assets/img/juntaDirectiva/secretario.jpg';
		} else if (e.target.innerText === 'Tesorero') {
			document.querySelector('.juntadirectiva__h4').innerHTML = tesorero.cargo;
			document.querySelector('.juntadirectiva__h3').innerHTML = tesorero.primerNombre + ' ' + tesorero.primerApellido + ' ' + tesorero.segundoApellido;
			document.querySelector('.juntadirectiva__p').innerHTML = tesorero.frase;
			document.querySelector('.juntadirectiva__persona').src = 'assets/img/juntaDirectiva/tesorero.jpg';
		} else if (e.target.innerText === 'Fiscal') {
			document.querySelector('.juntadirectiva__h4').innerHTML = fiscal.cargo;
			document.querySelector('.juntadirectiva__h3').innerHTML = fiscal.primerNombre + ' ' + fiscal.primerApellido + ' ' + fiscal.segundoApellido;
			document.querySelector('.juntadirectiva__p').innerHTML = fiscal.frase;
			document.querySelector('.juntadirectiva__persona').src = 'assets/img/juntaDirectiva/fiscal.jpg';
		}
	});
});

//? Determinar si alguno de los cargos de junta directiva no vienen definidos en el array 'juntaDirectiva'
//? Entonces, deshabilitar las tarjetas respectivas
juntadirectivaCards.forEach((card, index) => {


})

//? Cuando se hace click en alguna tarjeta cambia el tamaño de la tarjeta
juntadirectivaCards.forEach((card, index) => {

	if (juntaDirectiva[index] === undefined) {
		card.disabled = true;
		card.classList.add('disabled-card');
	}

	if (juntaDirectiva[index] !== undefined) {
		card.addEventListener("click", (e) => {

			juntadirectivaCards.forEach((card, index) => {
				if (card.classList.contains('active-card')) {
					card.classList.remove('active-card');
				}
			});

			card.classList.add('active-card');

			if (card.dataset.card === 'presidente') {
				document.querySelector('.juntadirectiva__h4').innerHTML = presidente.cargo;
				document.querySelector('.juntadirectiva__h3').innerHTML = presidente.primerNombre + ' ' + presidente.primerApellido + ' ' + presidente.segundoApellido;
				document.querySelector('.juntadirectiva__p').innerHTML = presidente.frase;
			} else if (card.dataset.card === 'vicepresidente') {
				document.querySelector('.juntadirectiva__h4').innerHTML = vicepresidente.cargo;
				document.querySelector('.juntadirectiva__h3').innerHTML = vicepresidente.primerNombre + ' ' + vicepresidente.primerApellido + ' ' + vicepresidente.segundoApellido;
				document.querySelector('.juntadirectiva__p').innerHTML = vicepresidente.frase;
			} else if (card.dataset.card === 'secretario') {
				document.querySelector('.juntadirectiva__h4').innerHTML = secretario.cargo;
				document.querySelector('.juntadirectiva__h3').innerHTML = secretario.primerNombre + ' ' + secretario.primerApellido + ' ' + secretario.segundoApellido;
				document.querySelector('.juntadirectiva__p').innerHTML = secretario.frase;
			} else if (card.dataset.card === 'tesorero') {
				document.querySelector('.juntadirectiva__h4').innerHTML = tesorero.cargo;
				document.querySelector('.juntadirectiva__h3').innerHTML = tesorero.primerNombre + ' ' + tesorero.primerApellido + ' ' + tesorero.segundoApellido;
				document.querySelector('.juntadirectiva__p').innerHTML = tesorero.frase;
			} else if (card.dataset.card === 'fiscal') {
				document.querySelector('.juntadirectiva__h4').innerHTML = fiscal.cargo;
				document.querySelector('.juntadirectiva__h3').innerHTML = fiscal.primerNombre + ' ' + fiscal.primerApellido + ' ' + fiscal.segundoApellido;
				document.querySelector('.juntadirectiva__p').innerHTML = fiscal.frase;
			}
		});
	}
});