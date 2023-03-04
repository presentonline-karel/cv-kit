const languageDropdown = () => {
    const languages = document.querySelector(".languages");
    const languageActive = document.querySelector(".language-active");

    languageActive.addEventListener("click", () => {
        languages.classList.toggle("open");
        languageActive.classList.toggle("open");
    });
};

languageDropdown();