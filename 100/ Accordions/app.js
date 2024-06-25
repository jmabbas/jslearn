const itemHeaders = document.querySelectorAll(".accordion-item-header");

itemHeaders.forEach((accordion) => {
    accordion.addEventListener("click", collapseAccordion);
        
    function collapseAccordion() {

        const activeAccordion = document.querySelector(".active");

        if (activeAccordion && activeAccordion !== accordion) {
            activeAccordion.classList.toggle("active");
            activeAccordion.nextElementSibling.style.maxHeight =0;
        }

        accordion.classList.toggle("active");
        const accordionBody = accordion.nextElementSibling;

        if(accordion.classList.contains("active")) {
            accordionBody.style.maxHeight = accordionBody.scrollHeight+"px";
        } else {
            accordionBody.style.maxHeight = 0;
        }
    }
});
