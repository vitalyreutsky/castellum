const accordionHeader = document.querySelectorAll(".accordion__head");

accordionHeader.forEach((accordionHeader, ind) => {
  const accordionBody = accordionHeader.nextElementSibling;

  if (accordionHeader.classList.contains("active")) {
    accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
  }

  accordionHeader.addEventListener("mouseover", () => {
    const currentlyActiveAccordionHeader = document.querySelector(
      ".accordion__head.active"
    );
    if (
      currentlyActiveAccordionHeader &&
      currentlyActiveAccordionHeader !== accordionHeader
    ) {
      currentlyActiveAccordionHeader.classList.toggle("active");
      currentlyActiveAccordionHeader.parentElement.classList.toggle("active");
      currentlyActiveAccordionHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionHeader.classList.add("active");

    if (accordionHeader.classList.contains("active")) {
      accordionHeader.parentElement.classList.add("active");
      accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
    } else {
      accordionBody.style.maxHeight = 0;
    }
  });
});
