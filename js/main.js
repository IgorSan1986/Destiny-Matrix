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
;(function () {
	const replaceImage = function ($image) {
		if (!$image || /^data:/.test($image.src)) return

		const xhr = new XMLHttpRequest()
		xhr.open('GET', $image.src)
		xhr.onload = function (e) {
			if (
				xhr.status === 200 &&
				!!(xhr.responseXML || {}).documentElement
			) {
				const $svg = xhr.responseXML.documentElement

				// take over all attributes
				;[].forEach.call($image.attributes, function (attribute) {
					// igmore these attributes
					if (['src'].indexOf(attribute.name) >= 0) return
					// set classNames
					else if (attribute.name === 'class')
						$image.classList.forEach(className =>
							$svg.classList.add(className)
						)
					// set all other attributes
					else $svg.setAttribute(attribute.name, attribute.value)
				})

				$svg.setAttribute('preserveAspectRatio', 'xMidYMid slice')

				$svg.classList.remove('inline-svg', 'lazyload', 'lazyloading')

				// replace image with svg
				if ($image && $image.parentElement) {
					$image.parentElement.replaceChild($svg, $image)

					const $figure = $svg.closest('.inline-svg')
					if ($figure) $figure.classList.remove('inline-svg')

					window.requestAnimationFrame(() =>
						window.dispatchEvent(
							new CustomEvent('inline-svg', {detail: $svg})
						)
					)
				}
			}
		}
		xhr.send('')
	}

	let $images // get images
	$images = document.getElementsByTagName('img')
	;[].forEach.call($images, function ($image) {
		if (
			!(
				$image.classList.contains('inline-svg') ||
				$image.closest('.inline-svg')
			)
		)
			return

		replaceImage($image)
		$image.addEventListener(
			'load',
			function (e) {
				replaceImage(e.target)
			},
			{passive: true}
		)
	})
})()
