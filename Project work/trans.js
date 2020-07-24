const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navlinks = document.getElementsByClassName("nav-links")[0];

toggleButton.addEventListener("click", () => {
  navlinks.classList.toggle("active");
});
