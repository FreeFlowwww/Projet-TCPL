

let Reservation = document.getElementById('booking-form')
let SubmitReservation = document.getElementById('submit-btn')
let Hotels = document.getElementById('Hotel-Data')

SubmitReservation.addEventListener('click',()=>{


      event.preventDefault()
    Reservation.style.transform='translateY(-180%)'
    Reservation.style.transition='.7s ease'

    Hotels.style.display='block'
    Hotels.style.borderRadius='10px'
    Hotels.style.height='400px'
    Hotels.style.background='white'
    Hotels.style.position='absolute'
    Hotels.style.width='75%'
    Hotels.style.top='140%'
    Hotels.style.left='50%'
    Hotels.style.transform='translate(-50%,-50%)'
    Hotels.style.overflow='scroll'
})

document.querySelector('#contact-form').addEventListener('submit', (e) => {
  e.preventDefault();
  e.target.elements.name.value = '';
  e.target.elements.email.value = '';
  e.target.elements.message.value = '';
});

const slides = document.querySelectorAll('.carousel-slide');
let currentSlide = 0;
const slideInterval = 5000; 

function showSlide(n) {
  slides[currentSlide].style.display = 'none';
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].style.display = 'block';
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

function prevSlide() {
  showSlide(currentSlide - 1);
}


function startCarousel() {
  setInterval(() => {
    nextSlide();
  }, slideInterval);
}

// Afficher la première diapositive au chargement de la page
showSlide(currentSlide);

// Démarrer le carrousel automatique
startCarousel();


const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");


hamburgerBtn.addEventListener("click", () => {
  navbarMenu.classList.toggle("show-menu");
});


hideMenuBtn.addEventListener("click", () => hamburgerBtn.click());


showPopupBtn.addEventListener("click", () => {
  document.body.classList.toggle("show-popup");
});


hidePopupBtn.addEventListener("click", () => showPopupBtn.click());


signupLoginLink.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    formPopup.classList[link.id === "signup-link" ? "add" : "remove"](
      "show-signup"
    );
  });
});