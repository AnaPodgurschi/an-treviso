export default function fixedHeader() {
  const header = document.querySelector(".fixed-header");
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 300) {
      if (!header.classList.contains("active")) {
        header.classList.add("active");
        setTimeout(() => {
          header.classList.remove("fixed-header--hidden");
        }, 200);
      }
    } else {
      if (header.classList.contains("active")) {
        header.classList.remove("active");
      }
    }
  });
}
