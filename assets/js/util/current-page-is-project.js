const setPrevPageProject = () => {
    const nav = document.querySelector(".nav");
    nav.classList.add("nav-project");



    localStorage.setItem("prevPageIsHome", "false"); // Only string values in localStorage
    localStorage.setItem("projectTitle", document.querySelector(".project-info__title").innerHTML);
    localStorage.setItem("projectProduct", document.querySelector(".project-info__product").innerHTML);
    localStorage.setItem("projectDescription", document.querySelector(".project-info__description").innerHTML);
}

setPrevPageProject();