const username = document.querySelector('#username')
const email = document.querySelector('#email')
const title = document.querySelector('#title')
const message = document.querySelector('#message')
const sendBtn = document.querySelector('.send')
const info = document.querySelector('.info')

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
		showError(input, `Nazwa użytkownika musi składać się z min. ${min} znaków.`)
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
		info.classList.add('show')
	}
}

//AddEventListener on the buttons

//Send button

sendBtn.addEventListener('click', e => {
	e.preventDefault()
	checkForm([username, email, title, message])
	checkLength(username, 3)
	checkMail(email)
	checkErrors()
})