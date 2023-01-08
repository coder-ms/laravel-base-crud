import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

var scrollPage = false;
const header = document.getElementById('my-header');
const span = document.getElementById('my-span');
const activeLink = document.getElementsByClassName('active_li');
const notActiveLink = document.getElementsByClassName('not_active');

// console.log(activeLink[0], notActiveLink);


window.addEventListener('scroll', function (e) {



    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        scrollPage = true;
    }
    else {
        scrollPage = false;
    }
    if (scrollPage){

        for(let i = 0; i < notActiveLink.length; i++){
            notActiveLink[i].classList.add('my-span');
        };

       header.classList.add('my-bg');
       span.classList.add('my-span');
    } else{
        for(let i = 0; i < notActiveLink.length; i++){
            notActiveLink[i].classList.remove('my-span');
        };

        header.classList.remove('my-bg');
        span.classList.remove('my-span');
    }
});

