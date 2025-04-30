document.addEventListener("DOMContentLoaded", () => {
  const fadeInElements = document.querySelectorAll(".fade-in-up");

  const handleScroll = () => {
    fadeInElements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        el.classList.add("visible");
      }
    });
  };

  window.addEventListener("scroll", handleScroll);
  handleScroll(); // Trigger on page load
});