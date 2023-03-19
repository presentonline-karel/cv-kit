const employeeDisplaySettings = () => {
    let prevPageIsHome = localStorage.getItem("prevPageIsHome");

    // Components
    const nav = document.querySelector(".nav");
    const breadcrumbsHome = document.querySelector(".breadcrumbs-home");
    const breadcrumbsProject = document.querySelector(".breadcrumbs-project");
    const relatedEmployees = document.querySelector(".discover-more-section");

    const projectTitle = document.querySelector(".project-info__title");
    const projectProduct = document.querySelector(".project-info__product");
    const projectDescription = document.querySelector(".project-info__description");
    


    // Prev page is project
    if(prevPageIsHome == "false") {
        relatedEmployees.style.display = "none";
        breadcrumbsHome.style.display = "none";
        breadcrumbsProject.style.display = "flex";

        nav.classList.add("nav-project");
        projectTitle.innerHTML = localStorage.getItem("projectTitle");
        projectProduct.innerHTML = localStorage.getItem("projectProduct");
        projectDescription.innerHTML = localStorage.getItem("projectDescription");
    
    // Prev page is home
    } else {
        breadcrumbsHome.style.display = "flex";
        breadcrumbsProject.style.display = "none";
    }
}

employeeDisplaySettings();