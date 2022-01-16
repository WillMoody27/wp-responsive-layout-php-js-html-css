const toggleMenu = document.querySelector(".toggle-menu");
const menu = document.querySelector("ul");
const bars = document.querySelectorAll(".bar");
const socialNav = document.querySelector(".widget-area-nav");

toggleMenu.addEventListener("click", () => {
  menu.classList.toggle("active");
  socialNav.classList.toggle("active");
  bars.forEach((bar) => {
    bar.classList.toggle("active");
  });
});
