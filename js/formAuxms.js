for (var i = 1; i <= 10; i++) {
    const btnMs = document.getElementById('btn-aux-ms-'+i+'');

    btnMs.addEventListener('click', function () {
        document.getElementById('form-aux-ms').classList.toggle('active');
    })
}


const closeMs = document.getElementById('aux-close-mcs')
closeMs.addEventListener('click', function () {
    document.getElementById('form-aux-ms').classList.toggle('active');
})
