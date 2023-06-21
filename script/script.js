const toggleBtn = document.querySelector("#themeToggle");
const body = document.querySelector("body");

toggleBtn.addEventListener("click", toggleTheme);

function toggleTheme() {
  body.classList.toggle("light");
  if (body.classList.contains("light")) {
    document.documentElement.style.setProperty("--dark", "#fff");
    document.documentElement.style.setProperty("--light", "#000");
    this.querySelector("i").setAttribute("class", "fas fa-moon");
  } else {
    document.documentElement.style.setProperty("--dark", "#000");
    document.documentElement.style.setProperty("--light", "#fff");
    this.querySelector("i").setAttribute("class", "fas fa-sun");
  }
}

// LAZY LOAD

const lazyImg = document.querySelectorAll("[data-src]");

function preloadImage(img) {
  const src = img.getAttribute("data-src");
  {
    if (!src) return;
    img.src = src;
  }
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    entry.target.classList.toggle("lazy-loaded", entry.isIntersecting);
    if (!entry.isIntersecting) return;
    preloadImage(entry.target);
    observer.unobserve(entry.target);
  });
});
lazyImg.forEach((image) => {
  observer.observe(image);
});
