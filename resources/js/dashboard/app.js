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

  selectOptions.forEach((el, key) => {
    console.log(selectInput.value, '--', el.value)
    if (selectInput.value == el.value) {
      selectInputText.innerHTML = el.innerHTML;
    }
  })

  if (selectWrapper) {
    selectWrapper.onclick = () => {
      selectArrow.classList.toggle('form__rotate-arrow');
      select.classList.toggle('form__status-hide');
    }
  }

  if (selectOptions.length > 0) {
    selectOptions.forEach((el, key) => {
      el.onclick = () => {
        selectOptions.forEach((innerEl, innerKey) => {
          if (key === innerKey) {
            innerEl.classList.add('form__status-option-active');
            selectInput.setAttribute("value", innerEl.value);
            selectInputText.innerHTML = innerEl.innerHTML;
          }
          else {
            innerEl.classList.remove('form__status-option-active');
          }
        })
      }
    })
  }

  // BURGER

  const menuBurger = document.querySelector('.header__menu-button');
  const menuMobile = document.querySelector('.menu-mobile__wrapper');

  if (menuBurger) {
    menuBurger.onclick = (el) => {
      menuMobile.classList.toggle('menu-mobile__hide');
    }
  }

  // ANALYZE TEXT

  const timeToReadInput = document.querySelector('#reading-time');
  const fullText = document.querySelector('#full-text');

  const stripHTML = (html) => {
    let div = document.createElement("div");
    div.innerHTML = html;
    return div.textContent || div.innerText || "";
  }

  const getMinuteDeclension = (minutes) => {
    if (minutes % 10 === 1 && minutes % 100 !== 11) {
      return 'минута';
    } else if ([2, 3, 4].includes(minutes % 10) && ![12, 13, 14].includes(minutes % 100)) {
      return 'минуты';
    } else {
      return 'минут';
    }
  }

  const analyzeText = () => {
    const plainText = stripHTML(fullText.value);

    // Подсчитываем количество символов без учета пробелов
    const charCount = plainText.replace(/\s+/g, '').length;

    // Средняя скорость чтения: 200 слов в минуту, 5 символов на слово -> 1000 символов в минуту
    const readingSpeed = 1000; // символов в минуту
    const readingTime = Math.ceil(charCount / readingSpeed);
    timeToReadInput.setAttribute("value", `${readingTime} ${getMinuteDeclension(readingTime)}`);
  }

  if (fullText) {
    fullText.addEventListener("input", analyzeText);

  }

  //TOAST


  const hideToast = () => {
    const toast = document.getElementById('toast');
    if (toast) {
      toast.classList.remove('toast__show');
      setTimeout(() => {
        toast.style.display = 'none';
      }, 500);
    }
  }

  const toast = document.getElementById('toast');

  if (toast) {
    // Показываем тост с задержкой
    setTimeout(() => {
      toast.classList.add('toast__show');
    }, 100);

    // Автоматически скрываем тост через 5 секунд
    setTimeout(hideToast, 5000);
  }


  //Status sort


  const pagesList = document.querySelector('.pages__list');
  const statusButton = document.querySelector('#pages-status');
  const titleButton = document.querySelector('#pages-title');
  const pagesItem = Array.from(document.querySelectorAll('.pages__item'));

  const defaultList = [...pagesItem];

  const sortStatus = (direction, item) => {

    // Сортируем массив
    const sortedStatus = item.sort((a, b) => {
      const statusA = a.querySelector('#status').getAttribute('status-data');
      const statusB = b.querySelector('#status').getAttribute('status-data');

      if (direction === 'asc') return statusA - statusB;
      else if (direction === 'desc') return statusB - statusA;
    });

    // Очищаем текущий список элементов в pagesList
    pagesList.innerHTML = '';

    // Вставляем отсортированные элементы обратно
    sortedStatus.forEach(item => {
      pagesList.appendChild(item); // Перемещаем каждый элемент в контейнер
    });
  }



  if (statusButton) {
    statusButton.onclick = () => {
      if (pagesList.getAttribute('status-sort') === 'asc') {
        pagesList.setAttribute('status-sort', 'desc');
        sortStatus('desc', pagesItem);
      }
      else if (pagesList.getAttribute('status-sort') === 'desc') {
        pagesList.setAttribute('status-sort', 'asc');
        sortStatus('asc', pagesItem);
      }
    }
  }

  if (titleButton) {
    titleButton.onclick = () => {
      // Очищаем текущий список элементов в pagesList
      pagesList.innerHTML = '';

      // Вставляем отсортированные элементы обратно
      defaultList.forEach(item => {
        pagesList.appendChild(item); // Перемещаем каждый элемент в контейнер
      });
    }
  }

  //delete popup

  const deleteLinks = document.querySelectorAll('#delete-link');

  if (deleteLinks.length > 0) {
    deleteLinks.forEach(el => {
      el.onclick = (event) => {
        event.preventDefault();
        const userChoice = window.confirm('Вы уверены, что хотите продолжить?');
        if (userChoice) {
          window.location.href = el.href;
        }
      };
    });
  }

}