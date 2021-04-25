const map = document.querySelector(".contact__map")?.firstElementChild;

const width = Math.floor(window.innerWidth - 32);
const height = Math.floor(window.innerHeight * 0.7);

if (window.innerWidth < 786) {
  map?.setAttribute("width", width);
  map?.setAttribute("height", height);
}
