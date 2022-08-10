var btnMenu = document.getElementById('btnMenu');
var menu = document.getElementById('menu');

var menuLink_about = document.getElementById('menu__link-about');
var menuLink_blog = document.getElementById('menu__link-blog');
var menuLink_portafolio = document.getElementById('menu__link-portafolio');
var menuLink_contact = document.getElementById('menu__link-contact');
var menuLink_home = document.getElementById('menu__link-home');

var perfil__item = document.getElementById('perfil__item');

var menuLink_perfil = document.getElementById('menu__link2-perfil');
var menuLink_close = document.getElementById('menu__link2-close');

btnMenu.addEventListener('click', function(){
	menu.classList.toggle('mostrar');

	menuLink_about.classList.toggle('mostrar-link-about');
	menuLink_blog.classList.toggle('mostrar-link-blog');
	menuLink_portafolio.classList.toggle('mostrar-link-portafolio');
	menuLink_contact.classList.toggle('mostrar-link-contact');
	menuLink_home.classList.toggle('mostrar-link-home');

    perfil__item.classList.toggle('mostrar-perfil__item');

	menuLink_perfil.classList.toggle('mostrar-link2-perfil');
	menuLink_close.classList.toggle('mostrar-link2-close');
});