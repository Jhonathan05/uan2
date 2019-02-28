for (var i = 1; i <= 10; i++){
    const btnAuxcs = document.getElementById('btn-aux-mcs-'+i+'');
    
    btnAuxcs.addEventListener('click', function(){
        document.getElementById('form-aux-mcs').classList.toggle('active');
        
        console.log('pulsado boton #:'+i+'');
    })
    
}

const closeMcs = document.getElementById('aux-close-mcs');

closeMcs.addEventListener('click', function(){
    document.getElementById('form-aux-mcs').classList.toggle('active');
    
})
