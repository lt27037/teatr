const mobileButton = document.querySelector(".mainHeader__mobileButton");
const menuBody = document.querySelector(".mainHeader__nav");
const logo = document.querySelector(".logo");

const festivalButton = document.querySelector(".item--festival");
const archiveButton = document.querySelector(".item--archive");

const festivalSubmenu = document.querySelector(".submenu--festival");
const archiveSubmenu = document.querySelector(".submenu--archive");

mobileButton.addEventListener("click", () => {
  mobileButton.classList.toggle("menu--active");
  menuBody.classList.toggle("menu--active");
  logo.classList.toggle("menu--active");
});

if (window.innerWidth < 786) {
  festivalButton?.addEventListener("click", (e) => {
    festivalSubmenu?.classList.toggle("menu--active");
  });
  archiveButton?.addEventListener("click", (e) => {
    archiveSubmenu?.classList.toggle("menu--active");
  });
}

console.log(window.innerWidth);
