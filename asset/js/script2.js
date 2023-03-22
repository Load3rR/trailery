
const backToTopButton = document.querySelector("#back-to-top");

// Show or hide the button based on the current scroll position
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    backToTopButton.classList.remove("hidden");
  } else {
    backToTopButton.classList.add("hidden");
  }
});

// Smooth scroll to top when button is clicked
backToTopButton.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

