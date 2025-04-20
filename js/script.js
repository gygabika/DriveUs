document.addEventListener("DOMContentLoaded", function () {
  console.log("script.js loaded");

  const menuIcon = document.querySelector(".menu-icon");
  const nav = document.querySelector("nav");
  const closeIcon = document.querySelector(".close-icon");

  console.log("Menu elements:", { menuIcon, nav, closeIcon });

  if (!menuIcon) {
    console.error("Menu icon not found!");
  } else {
    menuIcon.addEventListener("click", function () {
      console.log("Menu icon clicked");
      nav.classList.toggle("active");
    });
  }

  if (!nav) {
    console.error("Nav element not found!");
  }

  if (!closeIcon) {
    console.error("Close icon not found!");
  } else {
    closeIcon.addEventListener("click", function (event) {
      console.log("Close icon clicked");
      event.stopPropagation();
      if (nav) {
        nav.classList.remove("active");
        console.log(
          "Nav active class removed, current classes:",
          nav.className
        );
      }
    });
  }

  let currentSlide = 0;
  const slides = document.querySelectorAll(".slide");
  let autoSlideInterval;

  function moveSlide(direction) {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");
  }

  function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
      moveSlide(1);
    }, 4000);
  }

  if (slides.length > 0) {
    slides[0].classList.add("active");
    startAutoSlide();
  }

  const prevButton = document.getElementById("elozo");
  const nextButton = document.getElementById("kovetkezo");

  if (prevButton) {
    prevButton.addEventListener("click", () => {
      clearInterval(autoSlideInterval);
      moveSlide(-1);
      setTimeout(startAutoSlide, 5000);
    });
  }

  if (nextButton) {
    nextButton.addEventListener("click", () => {
      clearInterval(autoSlideInterval);
      moveSlide(1);
      setTimeout(startAutoSlide, 5000);
    });
  }

  const cards = document.querySelectorAll(".card");
  const fullTextOverlay = document.createElement("div");
  fullTextOverlay.classList.add("full-text-overlay");
  document.body.appendChild(fullTextOverlay);

  cards.forEach((card) => {
    card.addEventListener("click", function () {
      const fullText = card.querySelector("p").innerText;
      const fullTextContainer = document.createElement("div");
      fullTextContainer.classList.add("full-text-container");
      fullTextContainer.innerHTML = `<p>${fullText}</p>`;
      fullTextOverlay.innerHTML = "";
      fullTextOverlay.appendChild(fullTextContainer);
      fullTextOverlay.style.display = "flex";
    });
  });

  fullTextOverlay.addEventListener("click", function () {
    fullTextOverlay.style.display = "none";
  });

  const navLinks = nav ? nav.querySelectorAll("a") : [];
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      console.log("Nav link clicked");
      if (nav) {
        nav.classList.remove("active");
      }
    });
  });
});
