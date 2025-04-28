(function () {
  console.log("carrousel.js");

  const radios = document.querySelectorAll('.hero__radio__input');
  const slides = document.querySelectorAll('.hero__carrousel');
  const heroAnimations = document.querySelectorAll('.hero__animation');
  let currentIndex = 0;
  let intervalID;

  const slideCount = slides.length;

  function afficherSlide(index) {
      slides.forEach((slide, i) => {
          slide.classList.toggle('active', i === index);
          radios[i].checked = (i === index);
      });

      relancerAnimations();

      currentIndex = index;
  }

  function slideSuivant() {
      const prochainIndex = (currentIndex + 1) % slideCount;
      afficherSlide(prochainIndex);
  }

  function startInterval() {
      intervalID = setInterval(slideSuivant, 5000);
  }

  function restartInterval() {
      clearInterval(intervalID);
      startInterval();
  }

  let animationIndex = 0;

  function alternerAnimations() {
      if (animationIndex % 2 === 0) {
          heroAnimations[0].style.display = "block";
          heroAnimations[0].classList.add("animation-left");
          heroAnimations[1].style.display = "none";
          heroAnimations[1].classList.remove("hero__animation--slide-up");
      } else {
          heroAnimations[1].style.display = "block";
          heroAnimations[1].classList.add("hero__animation--slide-up");
          heroAnimations[0].style.display = "none";
          heroAnimations[0].classList.remove("animation-left");
      }
      animationIndex++;
  }

  function relancerAnimations() {
      alternerAnimations();

      heroAnimations.forEach((element) => {
          element.classList.remove("hidden");
          void element.offsetWidth;
      });
  }

  radios.forEach((radio, index) => {
      radio.addEventListener('change', function () {
          afficherSlide(index);
          restartInterval();
      });
  });

  afficherSlide(0);
  startInterval();

})();
