const elements = document.querySelectorAll('.data > *');
let parentElem = document.querySelector('.left-textbox');
elements.forEach(function (elem) {
  if (elem.tagName === 'H2') {
    parentElem = document.querySelector('.right-textbox');
  }

  if (parentElem === document.querySelector('.left-textbox')) {
    if (elem.tagName === 'P') {
      elem.classList.add('hero-text');
      document.querySelector('h1').insertAdjacentElement('afterend', elem);
    } else {
      const carousel = document.querySelector('.carousel');
      carousel.insertAdjacentHTML('beforeend', '<div class="carousel-cell">' + elem.innerHTML + '</div>');
    }
  } else {
    parentElem.insertAdjacentElement('beforeend', elem);
  }
});

document.querySelector('.data').parentNode.removeChild(document.querySelector('.data'));