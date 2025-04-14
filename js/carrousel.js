(function () {
    console.log("carrousel.js");
  
    const radios = document.querySelectorAll('.hero__radio__input');
    const slides = document.querySelectorAll('.hero__carrousel');
    let currentIndex = 0;
    let intervalID;
  
    console.log("Nombre d'inputs =", radios.length);
    console.log("Nombre de slides =", slides.length);
  
    function afficherSlide(index) {
      slides.forEach((slide, i) => {
        if (i === index) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
        radios[i].checked = (i === index);
      });
      currentIndex = index;
    }
  
    function slideSuivant() {
      const prochainIndex = (currentIndex + 1) % slides.length;
      afficherSlide(prochainIndex);
    }
  
    function startInterval() {
      intervalID = setInterval(() => {
        slideSuivant();
      }, 5000);
    }
  
    function restartInterval() {
      clearInterval(intervalID);
      startInterval();
    }
  
    radios.forEach((radio, index) => {
      radio.addEventListener('change', function () {
        afficherSlide(index);
        restartInterval();
      });
    });
  
    afficherSlide(0); // Important! Affiche le premier slide
    startInterval();  // Démarre le carrousel automatique
  })();
  