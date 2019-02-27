/*const btnCard = document.getElementById('slide-card');*/
const btnCard = document.getElementById('slide-card');

btnCard.addEventListener('click', function () {

    document.getElementById('ico-desp').classList.toggle('active');

    document.getElementById('card-sala1').classList.toggle('active');
    document.getElementById('slide-card').classList.toggle('active');
    document.getElementById('card-body1').classList.toggle('active');

    for (var i = 2; i < 12; i++) {

        document.getElementById('card-sala'+i+'').classList.toggle('active');
        document.getElementById('slide-card'+i+'').classList.toggle('active');
        document.getElementById('card-body'+i+'').classList.toggle('active');
    }

})
