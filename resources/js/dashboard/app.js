window.onload = () => {
  //TUBS
  //123
  const tubButtons = document.querySelectorAll('.form__tab-button');
  const tubs = document.querySelectorAll('.form__tab');

  tubButtons.forEach((el, key) => {
    el.onclick = () => {
      tubButtons.forEach((innerEl, innerKey) => {
        console.log(key, innerKey);
        if (innerKey === key) {
          tubButtons[innerKey].classList.add('form__tab-button-active');
          tubs[innerKey].classList.add('form__tab-active');
        }
        else {
          tubButtons[innerKey].classList.remove('form__tab-button-active');
          tubs[innerKey].classList.remove('form__tab-active');
        }
      })
    }
  })

  // DROPDAWN SELECT

  const selectWrapper = document.querySelector('.form__select-wrapper');
  const select = document.querySelector('.form__status-select');
  const selectArrow = document.querySelector('.form__status-arrow');
  const selectOptions = document.querySelectorAll('.form__status-option');
  const selectInput = document.querySelector('.form__status-current');
  const selectInputText = document.querySelector('.form__status-current-text');

  selectOptions.forEach((el, key) => {
    if (selectInput.value === el.innerHTML) {
      el.classList.add('form__status-option-active');
    }
  })

  selectWrapper.onclick = () => {
    selectArrow.classList.toggle('form__rotate-arrow');
    select.classList.toggle('form__status-hide');
  }

  selectOptions.forEach((el, key) => {
    el.onclick = () => {
      selectOptions.forEach((innerEl, innerKey) => {
        if (key === innerKey) {
          innerEl.classList.add('form__status-option-active');
          selectInput.value = innerEl.value;
          selectInputText.innerHTML = innerEl.innerHTML;
        }
        else {
          innerEl.classList.remove('form__status-option-active');
        }
      })
    }
  })

  // BURGER

  const menuBurger = document.querySelector('.header__menu-button');
  const menuMobile = document.querySelector('.menu-mobile__wrapper');

  menuBurger.onclick = (el) => {
    menuMobile.classList.toggle('menu-mobile__hide');
  }

}