
const nav = document.getElementsByTagName('nav')
const logo = document.querySelector('.brand')
const logoImg = document.querySelector('.brand-logo')


const changeIcon = () => {
	
	if(nav.classList.contains('rd-navbar-static')) {
		logoImg.setAttribute('src', '/public/images/logo_transparent.png')
        console.log('jest static');
		
		
	} else {
		logoImg.setAttribute('src', '/public/images/icon_new.jpg')
	}


}

changeIcon()