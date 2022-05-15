const juntadirectivaButton = document.querySelectorAll('.juntadirectiva__button');

		const cargosJunta = [{
				'cargo': 'Presidente',
				'nombre': 'Lina Virginia Muñoz Garcés',
				'frase': '“El compromiso de nuestra Junta Directiva es la base de nuestra organización, la base de nuestra vida y la base de nuestra futura.”',
			},
			{
				'cargo': 'Vicepresidente',
				'nombre': 'Juan Diego Bravo Guevara',
				'frase': '“El compromiso de nuestra Junta Directiva es la base de nuestra organización, la base de nuestra vida y la base de nuestra futura.”',
			},
			{
				'cargo': 'Secretario',
				'nombre': 'Paula Andrea Rosero Pérez',
				'frase': '“El compromiso de nuestra Junta Directiva es la base de nuestra organización, la base de nuestra vida y la base de nuestra futura.”',
			},
			{
				'cargo': 'Tesorero',
				'nombre': 'Isabella Omen Rengifo',
				'frase': '“El compromiso de nuestra Junta Directiva es la base de nuestra organización, la base de nuestra vida y la base de nuestra futura.”',
			},
			{
				'cargo': 'Fiscal',
				'nombre': 'Ana Isabel Caicedo',
				'frase': '“El compromiso de nuestra Junta Directiva es la base de nuestra organización, la base de nuestra vida y la base de nuestra futura.”',
			},
		]

		juntadirectivaButton.forEach((button) => {
			button.addEventListener('click', (e) => {
				juntadirectivaButton.forEach((button) => {
					button.classList.remove('active');
				});
				e.target.classList.add('active');

				if (e.target.innerText === 'Presidente') {
					document.querySelector('.juntadirectiva__h4').innerHTML = cargosJunta[0].cargo;
					document.querySelector('.juntadirectiva__h3').innerHTML = cargosJunta[0].nombre;
					document.querySelector('.juntadirectiva__p').innerHTML = cargosJunta[0].frase;
				} else if (e.target.innerText === 'Vicepresidente') {
					document.querySelector('.juntadirectiva__h4').innerHTML = cargosJunta[1].cargo;
					document.querySelector('.juntadirectiva__h3').innerHTML = cargosJunta[1].nombre;
					document.querySelector('.juntadirectiva__p').innerHTML = cargosJunta[1].frase;
				} else if (e.target.innerText === 'Secretario') {
					document.querySelector('.juntadirectiva__h4').innerHTML = cargosJunta[2].cargo;
					document.querySelector('.juntadirectiva__h3').innerHTML = cargosJunta[2].nombre;
					document.querySelector('.juntadirectiva__p').innerHTML = cargosJunta[2].frase;
				} else if (e.target.innerText === 'Tesorero') {
					document.querySelector('.juntadirectiva__h4').innerHTML = cargosJunta[3].cargo;
					document.querySelector('.juntadirectiva__h3').innerHTML = cargosJunta[3].nombre;
					document.querySelector('.juntadirectiva__p').innerHTML = cargosJunta[3].frase;
				} else if (e.target.innerText === 'Fiscal') {
					document.querySelector('.juntadirectiva__h4').innerHTML = cargosJunta[4].cargo;
					document.querySelector('.juntadirectiva__h3').innerHTML = cargosJunta[4].nombre;
					document.querySelector('.juntadirectiva__p').innerHTML = cargosJunta[4].frase;
				}
			});
		});