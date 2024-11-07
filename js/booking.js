let currentYear = new Date().getFullYear();
let currentMonth = new Date().getMonth();

function generateCalendar(year, month) {
    const daysElement = document.getElementById("calendarDays");
    const currentMonthYearElement = document.getElementById("currentMonthYear");

    daysElement.innerHTML = "";
    const daysOfWeek = ["日", "一", "二", "三", "四", "五", "六"];
    daysOfWeek.forEach(day => {
        const dayHeader = document.createElement("div");
        dayHeader.className = "day day-header";
        dayHeader.innerText = day;
        daysElement.appendChild(dayHeader);
    });

    currentMonthYearElement.innerText = `${year} 年 ${month + 1} 月`;

    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 0; i < firstDayOfMonth; i++) {
        const emptyDay = document.createElement("div");
        emptyDay.className = "day";
        daysElement.appendChild(emptyDay);
    }

    for (let day = 1; day <= daysInMonth; day++) {
        const dayElement = document.createElement("div");
        dayElement.className = "day";
        dayElement.innerText = day;
        daysElement.appendChild(dayElement);
    }
}

function prevMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    generateCalendar(currentYear, currentMonth);
}

function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    generateCalendar(currentYear, currentMonth);
}

generateCalendar(currentYear, currentMonth);