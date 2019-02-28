for (var i = 1; i <= 20; i++){
    var btnAux = document.getElementById('btn-aux-'+i+'');
    
    btnAux.addEventListener('click', function(){
        document.getElementById('form-aux-mc').classList.toggle('active');
        
        /*console.log('pulsado boton #:'+i+'');*/
    })
    
}

const auxClose = document.getElementById('aux-close');

auxClose.addEventListener('click', function(){
    document.getElementById('form-aux-mc').classList.toggle('active');
})