(function () {
    // SWITCH FROM LOGIN TO REGISTER
    var login = document.getElementById("loginForm");
    var register = document.getElementById("registerForm");
    var openRegister = document.getElementById("openRegister");
    var openLogin = document.getElementById("openLogin");

    openRegister.addEventListener("click", function () {
        login.classList.add("hidden");
        register.classList.remove("hidden");
    });
    openLogin.addEventListener("click", function () {
        register.classList.add("hidden");
        login.classList.remove("hidden");
    });

    // DISPLAY FOR BIRTHDATE
    const daySelect = document.getElementById("day");
    const monthSelect = document.getElementById("month");
    const yearSelect = document.getElementById("year");

    const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    (function () {
        for (let i = 0; i < monthNames.length; i++) {
            const option = document.createElement("option");
            option.classList.add("option");
            option.textContent = monthNames[i];
            monthSelect.appendChild(option);
        }
    })();

    let previousDay;

    function populateDays(month) {
        // Delete all the children of day drop down
        // if they do exist
        // while (daySelect.firstChild) {
        // daySelect.removeChild(daySelect.firstChild);
        // }

        // Hold the number of days in the month
        let dayNum;
        let year = yearSelect.value;

        if (
            month === "April" ||
            month === "June" ||
            month === "September" ||
            month === "November"
        ) {
            dayNum = 30;
        } else if (month === "February") {
            // Check Leap year

            if (new Date(year, 1, 29).getMonth() === 1) {
                dayNum = 29;
            } else {
                dayNum = 28;
            }
        } else {
            dayNum = 31;
        }

        //Insert Correct day into day select
        for (let i = 1; i <= dayNum; i++) {
            let option = document.createElement("option");
            option.classList.add("option");
            option.textContent = i;
            daySelect.appendChild(option);
        }

        if (previousDay) {
            daySelect.value = previousDay;
            if (daySelect.value === "") {
                daySelect.value = previousDay - 1;
            }
            if (daySelect.value === "") {
                daySelect.value = previousDay - 2;
            }
            if (daySelect.value === "") {
                daySelect.value = previousDay - 3;
            }
        }
    }

    function populateYears() {
        // get current year the minus ten
        let year = new Date().getFullYear() - 10;

        // make the previous 80 years to be an option
        for (let i = 0; i < 91; i++) {
            let option = document.createElement("option");
            option.classList.add("option");
            option.textContent = year - i;
            yearSelect.appendChild(option);
        }
    }

    populateDays(monthSelect.value);
    populateYears();

    yearSelect.onchange = function () {
        populateDays(monthSelect.value);
    };
    monthSelect.onchange = function () {
        populateDays(monthSelect.value);
    };
    daySelect.onchange = function () {
        previousDay = daySelect.value;
    };
})();
