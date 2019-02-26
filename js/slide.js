const navBarToogle = document.getElementById('toggle-btn');

navBarToogle.addEventListener('click', function(){
    
    document.getElementById('nav-header').classList.toggle('active');
    document.getElementById('slide-menu').classList.toggle('active');
    document.querySelector('.container-body').classList.toggle('active');
    document.querySelector('.footer-content').classList.toggle('active');
    
})

const userIco = document.getElementById('user-ico');

userIco.addEventListener('click', function(){
    document.getElementById('content-user').classList.toggle('active');    
})

const loginIco = document.getElementById('user-ico');

loginIco.addEventListener('click', function(){
    document.getElementById('content-login').classList.toggle('active');
})

const soliOut = document.getElementById('a-solic');

soliOut.addEventListener('click', function(){
    document.getElementById('soli-out-big').classList.toggle('active');
})

const soliOutLess = document.getElementById('a-solic-out');

soliOutLess.addEventListener('click', function(){
    document.getElementById('soli-out-big').classList.toggle('active');
    document.getElementById('soli-out').classList.toggle('active');
})

const close = document.getElementById('close');

close.addEventListener('click', function(){
    document.getElementById('soli-out-big').classList.toggle('active');
})

