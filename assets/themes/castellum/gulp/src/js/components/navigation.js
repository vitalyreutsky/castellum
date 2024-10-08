const navigation_cards = document.querySelectorAll(".navigation__card");

navigation_cards.forEach((card) => {
  if (card) {
    card.addEventListener("click", (e) => {
      e.preventDefault();

      let href = card.getAttribute("href");
      const elem = document.querySelector(href);
      if (elem) {
        const y = elem.getBoundingClientRect().top + window.pageYOffset;

        setTimeout(() => {
          elem.scrollIntoView({
            top: y,
            behavior: "smooth",
          });
        }, 200);
      }
    });
  }
});
