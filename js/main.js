// ---
// Function to toggle forms
function toggleForms(formId) {
	const forms = Array.from(document.querySelectorAll('form'))

	forms.forEach(form => {
		form.classList.toggle('d-none', form.id !== formId)
	})
}

// ---
// Function for class management at the gender selection buttons
function toggleGenderButtonActive(buttonId) {
	const femaleButton = document.getElementById('female-btn')
	const maleButton = document.getElementById('male-btn')

	femaleButton.classList.toggle(
		'form-dates--active',
		buttonId === 'female-btn'
	)
	maleButton.classList.toggle('form-dates--active', buttonId === 'male-btn')
}

// ---
//Navigation
;(function () {
	const body = document.body
	const menuButton = document.querySelector('.menu__btn')
	const menuList = document.querySelector('.menu__list')

	menuButton.addEventListener('click', function (e) {
		const expanded = menuButton.getAttribute('aria-expanded') === 'true'

		menuButton.setAttribute('aria-expanded', !expanded)
		menuList.classList.toggle('active')
	})

	// Remove the toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener('click', e => {
		if (!menuButton.contains(e.target) && !menuList.contains(e.target)) {
			menuButton.setAttribute('aria-expanded', false)
			menuList.classList.remove('active')
		}
	})
})()

// ---
//Form-dates for calculate on home page
;(function () {
	const calculateBtn = document.getElementById('calculate-btn')
	const genderButtonsContainer = document.getElementById('form-personal')
	if (!genderButtonsContainer) {
		return
	}

	genderButtonsContainer.addEventListener('click', event => {
		// Проверяем, что клик был на кнопке выбора пола
		if (
			event.target.matches('#female-btn') ||
			event.target.matches('#male-btn')
		) {
			// Получаем идентификатор кнопки
			const buttonId = event.target.id

			// Вызываем функцию для управления классами у кнопок выбора пола
			toggleGenderButtonActive(buttonId)
		}
	})

	const formSection = document.querySelector('.form')
	formSection.addEventListener('click', event => {
		const personalButton = document.getElementById('personal')
		const compatibilityButton = document.getElementById('compatibility')

		if (
			event.target.matches('#personal') ||
			event.target.matches('#compatibility')
		) {
			const formId = event.target.getAttribute('data-form')
			toggleForms(formId)

			if (formId === 'form-personal') {
				personalButton.setAttribute('aria-expanded', 'true')
				personalButton.classList.add('form-dates--active')

				compatibilityButton.setAttribute('aria-expanded', 'false')
				compatibilityButton.classList.remove('form-dates--active')
			} else {
				personalButton.setAttribute('aria-expanded', 'false')
				personalButton.classList.remove('form-dates--active')

				compatibilityButton.setAttribute('aria-expanded', 'true')
				compatibilityButton.classList.add('form-dates--active')
			}

			event.stopPropagation()
		}
	})
})()

// Form Login and Registration
;(function () {
	const formSection = document.querySelector('.form-login-registration')
	console.log(formSection)
	formSection.addEventListener('click', event => {
		const loginButton = document.getElementById('login')
		const registrationButton = document.getElementById('registration')

		if (
			event.target.matches('#login') ||
			event.target.matches('#registration')
		) {
			const formId = event.target.getAttribute('data-form')
			toggleForms(formId)

			if (formId === 'form-login') {
				loginButton.setAttribute('aria-expanded', 'true')
				loginButton.classList.add('form-login-registration--active')

				registrationButton.setAttribute('aria-expanded', 'false')
				registrationButton.classList.remove(
					'form-login-registration--active'
				)
			} else {
				loginButton.setAttribute('aria-expanded', 'false')
				loginButton.classList.remove('form-login-registration--active')

				registrationButton.setAttribute('aria-expanded', 'true')
				registrationButton.classList.add(
					'form-login-registration--active'
				)
			}

			event.stopPropagation()
		}
	})
})
