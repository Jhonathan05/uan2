const btnUp = document.getElementById('arrow-down');

btnUp.addEventListener('click', function(){
    document.getElementById('arrow-down').classList.toggle('active');
    document.getElementById('arrow-up').classList.toggle('active');
    document.getElementById('footer-index').classList.toggle('active');
})
const btnDo = document.getElementById('arrow-up');

btnDo.addEventListener('click', function(){
    document.getElementById('arrow-down').classList.toggle('active');
    document.getElementById('arrow-up').classList.toggle('active');
    document.getElementById('footer-index').classList.toggle('active');
})
