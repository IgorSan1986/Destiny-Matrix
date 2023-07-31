'use strict'

//---
// Basic function for for showing svg in img tags
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
// Show and hide navigation
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

	const formSection = document.querySelector('.form-dates')

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

// ---
// Custom select box
;(function () {
	const customSelectInit = $select => {
		$select.style.display = 'none'
		customSelect('select[name="' + $select.name + '"]')
	}

	const observer = new MutationObserver(function (entries) {
		entries.forEach(entry => {
			entry.addedNodes.forEach($node => {
				if ($node.nodeName === 'FORM') {
					let $selects = $node.querySelectorAll('select')
					$selects.forEach($select => {
						customSelectInit($select)
					})
				}
			})
		})
	})

	const $blocksHasForm = document.querySelectorAll('.has-form')
	if ($blocksHasForm.length === 0) return

	$blocksHasForm.forEach($blockHasForm => {
		let $form = $blockHasForm.querySelector('form')

		if ($form) {
			// If form is already in dom ...
			let $selects = $form.querySelectorAll('select')
			$selects.forEach($select => {
				customSelectInit($select)
			})
		} else {
			// If form will be appended after dom ready ...
			observer.observe($blockHasForm, {
				subtree: true,
				childList: true,
			})
		}
	})

	const customSelectContainer = document.querySelector(
		'.custom-select-container'
	)
	const customSelectOpener = document.querySelector('.custom-select-opener')

	document.body.addEventListener('click', function (event) {
		// Если клик был сделан вне области выпадающего списка, сбрасываем класс is-open и custom-select-opener--open
		if (!customSelectContainer.contains(event.target)) {
			customSelectContainer.classList.remove('is-open')
			customSelectOpener.classList.remove('custom-select-opener--open')
		}
	})

	customSelectOpener.addEventListener('click', function (event) {
		event.stopPropagation()
		customSelectContainer.classList.toggle('is-open')
		customSelectOpener.classList.toggle('custom-select-opener--open')
	})
})()

// ---
// Tabs
;(function () {
	const tabs = document.querySelectorAll('.tabcontent'),
		links = document.querySelectorAll('.tabheader__item > a'),
		dropdownMobile = document.querySelector('select#mobile-tabs'),
		tabContainer = document.querySelector('.tabcontainer')

	console.log(dropdownMobile)

	if (!links.length || !tabs.length || !dropdownMobile) {
		return
	}

	const applyTab = e => {
		let anchor

		if (e.type === 'click') {
			anchor = e.target.getAttribute('href').substring(1)

			var allLinks = e.target.closest('.tabheader__items').children

			Array.from(allLinks).forEach(item => {
				item.classList.remove('active')
			})

			e.target.parentNode.classList.add('active')
		} else if (e.type === 'change') {
			anchor = e.target.value
		} else {
			return
		}

		tabs.forEach(item => {
			item.classList.remove('active', 'fade')
		})

		console.log(anchor)
		tabContainer.querySelector('#' + anchor).classList.add('active', 'fade')
	}

	dropdownMobile.addEventListener('change', applyTab)

	links.forEach(item => {
		item.addEventListener('click', applyTab)
	})
})()
