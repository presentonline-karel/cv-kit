const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const clickableNavItems = document.querySelectorAll(".clickable-nav-item");

    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        document.body.classList.toggle("stop-scrolling");
        burger.classList.toggle("toggle");
    });

    clickableNavItems.forEach((navItem) => {
        navItem.addEventListener("click", () => {
            nav.classList.toggle("nav-active");
            document.body.classList.toggle("stop-scrolling");
            burger.classList.toggle("toggle");
        });
    })
};

navSlide();