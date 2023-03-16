const toggleScrolledClass = () => {

    // Toggle "scrolled" class on element
    const toggleScrolledClass = (toToggleElement) => {
        let scrollposY = window.scrollY;
        const scrollTrigger = 1;

        window.addEventListener('scroll', function() {
            scrollposY = window.scrollY;

            if (scrollposY >= scrollTrigger) { 
                toToggleElement.classList.add("scrolled");
            } else { 
                toToggleElement.classList.remove("scrolled");
            }
        });
    }


    
    // Toggle nav
    if (window.innerWidth < 1280 ) {
        toggleScrolledClass(document.querySelector(".nav"));
    }

    // Toggle employee header
    if (window.innerWidth >= 1280 ) {
        toggleScrolledClass(document.querySelector(".employee-header"));
    }
}

toggleScrolledClass();