const filterEmployeesOnFunction = () => {
    const filterFeedback = document.querySelector(".filter-results-title");
    filterFeedback.style.display = "none";
    filterFeedback.classList.remove("active");

    const functions = document.querySelectorAll(".filter-tag");
    const employees = document.querySelectorAll(".employee-search-results");

    const teams = document.querySelectorAll(".team");
    const teamFilterResults = document.querySelector(".team.filter-results");
    teamFilterResults.style.display = "none";

    //const removeTagsButton = document.querySelector(".filter-tags__remove__tag");

    var activeFunctions = [];
    var amountOfResults = 0;

    const structuredFunctions = [];

    employees.forEach(employee => { 
        structuredFunctions.push(employee.querySelector(".department"));
    });

    document.querySelectorAll(".department").forEach(employeeFilter => {
        employeeFilter.style.display = "none";
    })



    for(let i = 0; i < functions.length; i++) {
        functions[i].addEventListener("click", function() {
            functions[i].classList.toggle("active");

            activeFunctions = document.querySelectorAll(".filter-tag.active");
            amountOfResults = 0;
            employees.forEach(employee => { employee.style.display = "none"; });

            if(activeFunctions.length < 1) {
                employees.forEach(employee => { employee.style.display = "flex"; });
                filterFeedback.style.display = "none";
                filterFeedback.classList.remove("active");

                teams.forEach(team => { team.style.display = "block"; });
                teamFilterResults.style.display = "none";
            }
            else {
                teams.forEach(team => { team.style.display = "none"; });
                teamFilterResults.style.display = "block";

                for (let j = 0; j < employees.length; j++) {
                    var filterableFunction = structuredFunctions[j].innerHTML;
                    
                    for(let l = 0; l < activeFunctions.length; l++) {
                        if(activeFunctions[l].innerHTML == filterableFunction) {
                            if(employees[j].style.display != "block") {
                                employees[j].style.display = "flex";
                                amountOfResults += 1;
                            }
                        }
                    }
                }

                if (amountOfResults == 1) {
                    filterFeedback.classList.add("active");
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = "1 resultaat";
                }
                else {
                    filterFeedback.classList.add("active");
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = amountOfResults + " resultaten";
                }
            }
        });
    }



    /*removeTagsButton.addEventListener("click", function() {

        // Reset active tags & amount of results
        activeTags = [];
        amountOfResults = 0;

        // Set display of filterFeedback to none
        filterFeedback.style.display = "none";

        for(let i = 0; i < tags.length; i++) {
            tags[i].classList.remove("active");
        }

        // Set all articles display to block
        for(let i = 0; i < articles.length; i++) {
            articles[i].style.display = "block";
        }
    }) */
}

filterEmployeesOnFunction();