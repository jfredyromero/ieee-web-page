
const circles = document.querySelectorAll('.informe-anual__counter')
const contadores = document.querySelectorAll('.counter__count')
const velocidad = 1000

const animarContadores = () => {
    for (const contador of contadores) {

        console.log('circles', circles)

        const actualizar_contador = () => {
            let cantidad_maxima = +contador.dataset.cantidadtotal,
                valor_actual = +contador.innerText,
                incremento = cantidad_maxima / velocidad

            if (valor_actual < cantidad_maxima) {
                contador.innerText = Math.ceil(valor_actual + incremento)
                setTimeout(actualizar_contador, 20)
            } else {
                contador.innerText = cantidad_maxima
            }
        }
        actualizar_contador()
    }
}

/* Interserction observer */

const mostrarContadores = (elementos) => {
    elementos.forEach(element => {

        if (element.isIntersecting) {
            element.target.classList.add('animar')
            element.target.classList.remove('ocultar')
            setTimeout(animarContadores, 300)
        }
    });
}

const observer = new IntersectionObserver(mostrarContadores, {
    threshold: 0.75
})

const elementosHTML = document.querySelectorAll('.informe-anual__graphic')
elementosHTML.forEach(elementoHTML => {
    observer.observe(elementoHTML)
})
