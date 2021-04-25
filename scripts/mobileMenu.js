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
  mobileButton.classList.remove("submenu--active");
  logo.classList.remove("submenu--active");
  archiveSubmenu?.classList.remove("submenu--active");
  festivalSubmenu?.classList.remove("submenu--active");
});

if (window.innerWidth < 786) {
  festivalButton?.addEventListener("click", (e) => {
    festivalSubmenu?.classList.toggle("submenu--active");
    mobileButton.classList.add("submenu--active");
    logo.classList.add("submenu--active");
  });

  archiveButton?.addEventListener("click", (e) => {
    archiveSubmenu?.classList.toggle("submenu--active");
    mobileButton.classList.add("submenu--active");
    logo.classList.add("submenu--active");
  });
}
