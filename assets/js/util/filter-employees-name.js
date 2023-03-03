const filterEmployeesOnName = () => {
    const filterFeedback = document.querySelector(".filter-results-title");
    filterFeedback.style.display = "none";
    
    const searchInput = document.querySelector(".input-filter");
    const employees = document.querySelectorAll(".employee");
    const employeeNames = document.querySelectorAll(".employee-name");

    const teams = document.querySelectorAll(".team");
    const teamFilterResults = document.querySelector(".team.filter-results");
    teamFilterResults.style.display = "none";



    searchInput.addEventListener("input", function () {
        var searchInputValue = searchInput.value;
        var amountOfResults = 0;

        if (searchInputValue.length < 1) {
            employees.forEach(employee => { employee.style.display = "flex"; });

            filterFeedback.style.display = "none";
            filterFeedback.classList.remove("active");

            teams.forEach(team => { team.style.display = "block"; });
            teamFilterResults.style.display = "none";
        }
        else {
            teams.forEach(team => { team.style.display = "none"; });
            teamFilterResults.style.display = "block";
            filterFeedback.classList.add("active");

            for (let i = 0; i < employees.length; i++) {
                let searchableEmployeeName = employeeNames[i].innerHTML;
                let searchableEmployeeNameLowerCase = searchableEmployeeName.toLowerCase();

                if (searchableEmployeeName.includes(searchInputValue) || searchableEmployeeNameLowerCase.includes(searchInputValue)) {
                    amountOfResults++;
                    employees[i].style.display = "flex";
                }
                else {
                    employees[i].style.display = "none";
                }

                // Search feedback
                if (amountOfResults == 0) {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = 'geen resultaten voor zoekterm "<b>' + searchInputValue + '</b>"';
                }
                else if (amountOfResults == 1) {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = '1 resultaat voor zoekterm "<b>' + searchInputValue + '</b>"';
                }
                else if (amountOfResults > 1) {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = amountOfResults + ' resultaten voor zoekterm "<b>' + searchInputValue + '</b>"';
                }
            }
        }
    });
}

filterEmployeesOnName();