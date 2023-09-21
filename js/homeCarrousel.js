let carrouselWrapper = document.querySelector(".swiper-wrapper");
let tempHTML = "";

const slides = [
  {
    img: "slide3.webp",
    title: "Heritage",
    description: "A Legacy of Almost 50 Years",
    link: "/royal-legacy-park-vida-vacations/heritage",
  },
  {
    img: "slide2.webp",
    title: "The Difference",
    description: "Discover a Better Way to Vacation",
    link: "/royal-legacy-park-vida-vacations/the-difference",
  },
  {
    img: "slide4.webp",
    title: "Values",
    description: "Explore Our Core Beliefs",
    link: "/royal-legacy-park-vida-vacations/values",
  },
  {
    img: "slide1.webp",
    title: "Legacy Park Resort",
    description: "The Best Vacationing Has to Offer",
    link: "/royal-legacy-park-vida-vacations/royal-legacy-park-vida-vacations",
  },
];

slides.forEach((slide) => {
  tempHTML += `
		<div class="swiper-slide">
			<div class="estates_estates__carousel__img_box">
				<img src="img/home/${slide.img}" alt="${slide.title}">
			</div>
			<h4 class="estates_estates__carousel__h4">${slide.title}</h4>
			<p class="estates_estates__carousel__p">${slide.description}</p>
			<a href="${slide.link}" class="estates_estates__carousel__link">Explore</a>
		</div>
	`;
});

carrouselWrapper.innerHTML = tempHTML;

const swiper = new Swiper(".swiper", {
  slidesPerView: "auto",
  loop: true,
  loopedSlides: 2,
  centeredSlides: true,
  spaceBetween: 4,
  breakpoints: {
    992: {
      spaceBetween: 32,
    },
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
