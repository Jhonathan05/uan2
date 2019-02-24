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

