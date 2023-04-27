// $('.hero-carousel').slick({
// 	arrows: false,
// 	mobileFirst: true,
// 	autoplay: false,
// 	slidesToShow: 1,
// 	slidesToScroll: 1,
// })




const username = document.querySelector('#username')
const pass = document.querySelector('#password')
const repeatPass = document.querySelector('#repeat-password')
const email = document.querySelector('#email')
const clearBtn = document.querySelector('.clear')
const sendBtn = document.querySelector('.send')
const cancelBtn = document.querySelector('.cancel')
const popup = document.querySelector('.popup')

const showError = (input, msg) => {
	const formBox = input.parentElement
	const errorMsg = formBox.querySelector('.error-text')

	formBox.classList.add('error')
	errorMsg.textContent = msg
}

const clearError = input => {
	const formBox = input.parentElement
	formBox.classList.remove('error')
}

const checkForm = input => {
	input.forEach(el => {
		if (el.value === '') {
			showError(el, el.placeholder)
		} else {
			clearError(el)
		}
	})
}

const checkLength = (input, min) => {
	if ((input.value.length < min) & (input.value !== '')) {
		showError(input, `${input.previousElementSibling.innerText.slice(0, -1)} składa sie z min. ${min} znaków.`)
	}
}

const comparePassword = (pass1, pass2) => {
	if (pass1.value !== pass2.value) {
		showError(pass2, 'Hasła nie są takie same')
	}
}

const checkMail = email => {
	const re =
		/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

	if (re.test(email.value)) {
		clearError(email)
	} else {
		showError(email, 'E-mail jest niepoprawny')
	}
}

const checkErrors = () => {
	const allInputs = document.querySelectorAll('.form-box')
	let countError = 0

	allInputs.forEach(el => {
		if (el.classList.contains('error')) {
			countError++
		}
	})

	if (countError === 0) {
		popup.classList.add('show-popup')
	}
}

//AddEventListener on the buttons

//Send button
sendBtn.addEventListener('click', e => {
	e.preventDefault()

	checkForm([username, pass, repeatPass, email])

	checkLength(username, 3)
	checkLength(pass, 8)
	comparePassword(pass, repeatPass)
	checkMail(email)
	checkErrors()
})

//ClearButton
clearBtn.addEventListener('click', e => {
	e.preventDefault();
	
	[username, pass, repeatPass, email].forEach(el => {
		el.value = ''
		clearError(el)
	})
})