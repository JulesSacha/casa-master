//Fenetre modale
document.addEventListener('click', function (e) {
    e = e || window.event;
    var target = e.target || e.srcElement;

    if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'modal') {
        if (target.hasAttribute('data-target')) {
            var m_ID = target.getAttribute('data-target');
            document.getElementById(m_ID).classList.add('open');
            e.preventDefault();
        }
    }

    // Close modal window with 'data-dismiss' attribute or when the backdrop is clicked
    if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'modal') || target.classList.contains('modal')) {
        var modal = document.querySelector('[class="modal open"]');
        modal.classList.remove('open');
        e.preventDefault();
    }
}, false);


// Slider
function sliderPluggin(activeslide = 0) {
  const slides = document.querySelectorAll('.slide');
  
  slides[activeslide].classList.add('active');

  function clearActiveClasses() {
    slides.forEach((slide) => {
      slide.classList.remove('active');
    });
  }

  for (const slide of slides) {
    slide.addEventListener('mouseenter', () => {
      clearActiveClasses();
      slide.classList.add('active');
    });
  }
}

sliderPluggin(0);
