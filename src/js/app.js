document.addEventListener('DOMContentLoaded', function () {
  eventListeners()

  darkMode()
})

function darkMode() {
  const prefiereDarkMode = window.matchMedia('(prefers-color-scheme:dark)');

  // console.log(prefiereDarkMode.matches);  Te dice si usas dark mode en tu sistema true o false

  if (prefiereDarkMode) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }

  prefiereDarkMode.addEventListener('change', function (){
    if (prefiereDarkMode) {
      document.body.classList.add('dark-mode');
    } else {
      document.body.classList.remove('dark-mode');
    }
  })

  const botonDarkMode = document.querySelector('.dark-mode-boton');

  botonDarkMode.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode')
  })
}

function eventListeners() {
  const mobileMenu = document.querySelector('.mobile-menu')

  mobileMenu.addEventListener('click', navegacionResponsive)
}
function navegacionResponsive() {
  const navegacion = document.querySelector('.navegacion')

  /*if (navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else {
        navegacion.classList.add('mostrar');
    }*/ //esta es más recomendable cuando inicias
  navegacion.classList.toggle('mostrar') //esta es más avanzada, se ve mejor
}
