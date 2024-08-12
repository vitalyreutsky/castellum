const switcher = document.querySelector(".switcher");

if (switcher) {
  switcherLink = document.querySelector(".switcher__main-link");
  const switcherItems = switcher.querySelectorAll(".switcher__item");

  switcherItems.forEach((item) => {
    if (!item.classList.contains("current-lang")) {
      const currentLink = item
        .querySelector(".switcher__link")
        .getAttribute("href");

      switcherLink.setAttribute("href", currentLink);
    }
  });
}
