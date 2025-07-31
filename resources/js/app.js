import "./bootstrap";

// {{-- script for 3d cards location --}}

const cards = document.querySelectorAll(".cards");

cards.forEach((card) => {
    card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();

        // rotation
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        // center position
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        // rotations from center
        const rotateX = (centerX - x) / 10;
        const rotateY = -(centerY - y) / 10;

        card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.10)`;
    });
});

cards.forEach((card) => {
    card.addEventListener("mouseleave", () => {
        card.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
    });
});

// hamburger
const hamburger = document.querySelector(".hamburger");
const menuMobile = document.querySelector(".nav-menu-mobile");
const aboutMeSection = document.querySelector(".about-me-section");

hamburger.addEventListener("click", () => {
    menuMobile.classList.toggle("opacity-100");
});

// tracking whole page scrolling
window.addEventListener("scroll", () => {
    const rect = aboutMeSection.getBoundingClientRect();
    if (rect.top < 100) {
        menuMobile.classList.remove("opacity-100");
    }
});
