document.addEventListener('DOMContentLoaded', function(){
    
    eventListener(); //FUNCION

    darkMode();//FUNCION DARKMODE
    
});

function darkMode(){
    const botonDarkMode = document.querySelector('.dark-mode-boton')

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode'); //Cuando se de click que agg dark-mode en el body cambiando la clase

    });


    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dar;');

    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');

        }else{
            document.body.classList.remove('dark-mode');

        }


    });


}



function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive); //Cuando se le de click va a mostrar la fucicion de abajo
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar'); // Si se le da a la clase navegacion remueve mostrar de lo contrario la agrega
    }else{
        navegacion.classList.add('mostrar');
    }


}