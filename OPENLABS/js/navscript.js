const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar_menu');
const navLogo = document.querySelector('#navbar_logo')

const mobileMenu = () => {
	menu.classList.toggle('is-active');
	menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);


const highLightMenu = () => {
	const elem = document.querySelector('.highlight')
	const homeMenu = document.querySelector('#home-page')
	const aboutMenu = document.querySelector('#about-page')
	const serviceMenu = document.querySelector('#services-page')
	let scrollPos = window.scrollY 
	console.log(scrollPos)

	
	if (window.innerWidth > 960 && scrollPos < 600) {
		homeMenu.classList.add('highlight')
		aboutMenu.classList.remove('highlight')
		return
	}else if (window.innerWidth > 960 && scrollPos < 1400) {
		aboutMenu.classList.add('highlight')
		homeMenu.classList.remove('highlight')
		serviceMenu.classList.remove('highlight')
		return
	}else if (window.innerWidth > 960 && scrollPos < 2345) {
		serviceMenu.classList.add('highlight')
		aboutMenu.classList.remove('highlight')
		return
	}

	if((elem && window.innerWidth < 960 && scrollPos < 600 ) || elem) {
		elem.classList.remove('highlight')
	}
}


window.addEventListener('scroll', highLightMenu)
window.addEventListener('click', highLightMenu)


const hideMobileMenu = () => {
	const menubars = document.querySelector('is-active')
	if (window.innerWidth <= 768 && menubars) {
		menu.classList.toggle('is-active')
		menuLinks.classList.remove('active')
	}
}

menuLinks.addEventListener('click', hideMobileMenu)
menuLinks.addEventListener('click', hideMobileMenu)

