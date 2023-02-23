const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");

    // Also add everyhting clickable within nav-slide that does not refresh the page.
    // If something from that gets clicked, togle nav and all other stuff

    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        document.body.classList.toggle("stop-scrolling");
        burger.classList.toggle("toggle");
    });
};

navSlide();