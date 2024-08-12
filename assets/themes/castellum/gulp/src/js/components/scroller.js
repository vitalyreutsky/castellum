const scroller = document.querySelector(".rewards__scroller");

if (scroller) {
  const scrollerItems = scroller.querySelectorAll(".scroller__item");
  setScrolledPaused(scrollerItems);
}

function setScrolledPaused(items) {
  items.forEach((item) => {
    item.addEventListener("mouseover", () => {
      item.parentElement.parentElement.classList.add("paused");
    });

    item.addEventListener("mouseout", () => {
      item.parentElement.parentElement.classList.remove("paused");
    });
  });
}
