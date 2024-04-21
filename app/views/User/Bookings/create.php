<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rent a gym</title>

  <style>
    .container {
      height: 500px;
      width: 1000px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30px;
      background-color: ghostwhite;
      border-radius: 10px;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    h1 {
      padding: 10px;
      color: black;
      background-color: #FFDE59;
    }


    button {
      margin: 0 20px;
      background-color: #FFDE59;
      height: 30px;
      width: 80px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
    }

    button:hover {
      transition: 0.2s;
      background-color: #FFCE00;
    }

    .btns {
      /* border: 1px solid red; */
      justify-content: space-between;
      display: flex;
    }

    .slides {
      padding: 50px;
      display: flex;
      flex-direction: column;
    }

    .slide {
      height: 360px;
      /* border: 1px solid red; */
    }

    .slide1 {
      display: block;
    }

    .slide2,
    .slide3 {
      display: none;
    }

    .courts {
      display: flex;
      gap: 10px;
      margin-top: 30px;
      /* border: 1px solid red; */
      /* justify-content: space-evenly; */
      height: 300px;
      gap: 30px;
      justify-content: center;
    }

    .court {
      /* background-color: ; */
      border-radius: 10px;
      /* padding: 20px 70px; */
      width: 215px;
      cursor: pointer;
      /* border: 2px solid lightgray; */
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .court:hover {
      background-color: #F2F2F2;
    }

    .courtText {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* border: 1px solid red; */
      height: 300px;
      padding: 20px;
      width: 215px;
    }

    header {
      background-color: black;
    }

    body {
      background: lightgray;
      text-align: center;
    }



    .calendar {
      max-width: 400px;
      margin: 0 auto;
    }

    .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .calendar-header h2 {
      flex-grow: 1;
      text-align: center;
    }

    .calendar-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 5px;
    }

    .calendar-day {
      padding: 10px;
      text-align: center;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .calendar-day.disabled {
      opacity: 0.5;
      cursor: not-allowed;
      text-decoration: line-through;
      text-decoration-color: gray;
    }

    .calendar-day.selected {
      background-color: #FFDE59;
      /* color: b; */
    }

    .timeSlots {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      justify-content: center;
      align-items: center;

    }

    .slot {
      width: 215px;
      padding: 20px;
      border-radius: 10px;
      background-color: ghostwhite;
      /* border: 1px solid lightgray; */
      cursor: pointer;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .slot:hover {
      background-color: #F2F2F2;
      font-weight: bold;
    }

    /* // ****************************************************************** */
    .slot.selected {
      background-color: whitesmoke;
      border: 1px solid black;
    }

    svg {
      height: 40px;
      opacity: 0;
      color: green;
    }

    .slot.disabled {
      display: none;
    }

    @keyframes spinner {
      to {
        transform: rotate(360deg);
      }
    }

    .spinner:before {
      content: '';
      box-sizing: border-box;
      position: absolute;
      top: 50%;
      left: 50%;
      width: 30px;
      height: 30px;
      margin-top: -15px;
      margin-left: -15px;
      border-radius: 50%;
      border: 1px solid #ccc;
      border-top-color: #07d;
      animation: spinner .6s linear infinite;
      margin-top: 100px;
    }
  </style>

</head>



<body>
  <div style='height: 200px'>
  </div>

  <h1>COURT RENTAL</h1>
  <div class="container">


    <div class="slides">

      <div class="slide slide1">
        <h2>Select an option</h2>
        <div class="courts">
          <div class="court court1" onclick="courtClick(1);">
            <div class="courtText">
              <h4>Full court</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut sem nunc. Donec venenatis tellus nec
                justo efficitur, ac tempus magna condimentum. Curabitur ac ante nulla.
              </p>
              <svg id="svg1" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none"
                  stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                  d="M352 176L217.6 336 160 272" />
              </svg>
            </div>
          </div>
          <div class="court court2" onclick="courtClick(2);">
            <div class="courtText">
              <h4>Half court</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut sem nunc. Donec venenatis tellus nec
                justo efficitur, ac tempus magna condimentum. Curabitur ac ante nulla.
              </p>
              <svg id="svg2" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none"
                  stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                  d="M352 176L217.6 336 160 272" />
              </svg>

            </div>
          </div>
        </div>
      </div>
      <div class="slide slide2">
        <div class="calendar">
          <div class="calendar-header">
            <button id="prevMonthBtn">◀</button>
            <h2 id="currentMonth"></h2>
            <button id="nextMonthBtn">▶</button>
          </div>
          <div class="calendar-grid" id="calendarGrid"></div>
        </div>
      </div>
      <div class="slide slide3">
        <h2 class="dateAvailabilities"></h2>
        <br>
        <p class="courtChoice"></p>
        <div class="timeSlots">
          <div class="spinner"></div>
          <div class="slot slot10 disabled" onclick="slotChosen(10)">
            <p>10:00 a.m. - 12:00 p.m.</p>
          </div>
          <div class="slot slot12 disabled" onclick="slotChosen(12)">
            <p>12:00 p.m. - 2:00 p.m.</p>
          </div>
          <div class="slot slot14 disabled" onclick="slotChosen(14)">
            <p>2:00 p.m. - 4:00 p.m.</p>
          </div>
          <div class="slot slot16 disabled" onclick="slotChosen(16)">
            <p>4:00 p.m. - 6:00 p.m.</p>
          </div>
        </div>
      </div>


    </div>

    <div class="btns">
      <button onclick="prevSlide()" class="prev" disabled>Back</button>
      <button onclick="nextSlide()" class="next" disabled>Next</button>
    </div>


  </div>


  <script>
    let currentSlide = 1;
    // 1 full, 2 half
    let selectedCourt = 1;

    let currentMonthIndex = new Date().getMonth();
    let currentYear = new Date().getFullYear();
    let selectedDay = null;

    let selectedDate = null;

    let selectedTimeSlot = null;

    // -------------------
    let disabledDates = [];

    function nextSlide() {

      $(".prev").attr("disabled", false);

      // (before changing slides)
      if (currentSlide == 2) {
        $(".next").attr("disabled", true);
      }

      $(`.slide${currentSlide}`).hide();
      currentSlide++;

      $(`.slide${currentSlide}`).show();
      if (currentSlide == 2) {
        // get disabled dates
        $.get(`/User/booking/disabledDates?booking_type=${selectedCourt == 1 ? "full" : "half"}`, function (data) {
          disabledDates = JSON.parse(data);
          updateCalendar();
        })


        $(".next").attr("disabled", selectedDay == null);
      }

      if (currentSlide == 3) {
        setAvailableTimeSlots();
      }
    }

    function prevSlide() {
      $(".next").attr("disabled", false);

      if (currentSlide - 1 == 1) {
        $(".prev").attr("disabled", true);
      }

      $(`.slide${currentSlide}`).hide();
      currentSlide--;
      $(`.slide${currentSlide}`).show();

    }

    function courtClick(courtNum) {
      if (selectedCourt !== courtNum) {
        selectedDay = null;
        selectedDate = null;
      }

      selectedCourt = courtNum;

      $(".next").attr("disabled", false);
      $(".court1").css("background-color", "");
      $(".court2").css("background-color", "");

      $(`svg`).css("opacity", "0");

      $(`#svg${courtNum}`).css("opacity", "0.2");

      // $(`.court${courtNum}`).css("background-color", "#F2F2F2");
      $(".courtChoice").html(`${courtNum === 1 ? "Full" : "Half"} court`);
    }

    const monthNames = [
      "January", "February", "March",
      "April", "May", "June", "July",
      "August", "September", "October",
      "November", "December"
    ];

    const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];


    const prevMonthBtn = document.getElementById("prevMonthBtn");
    const nextMonthBtn = document.getElementById("nextMonthBtn");
    const currentMonthElement = document.getElementById("currentMonth");
    const calendarGrid = document.getElementById("calendarGrid");

    function updateCalendar() {
      const firstDayOfMonth = new Date(currentYear, currentMonthIndex, 1);
      const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();

      currentMonthElement.textContent = `${monthNames[currentMonthIndex]} ${currentYear}`;

      calendarGrid.innerHTML = "";

      for (let i = 0; i < daysOfWeek.length; i++) {
        const dayOfWeekElement = document.createElement("div");
        dayOfWeekElement.classList.add("calendar-day");
        dayOfWeekElement.textContent = daysOfWeek[i];
        calendarGrid.appendChild(dayOfWeekElement);
      }

      for (let i = 0; i < firstDayOfMonth.getDay(); i++) {
        const emptyDayElement = document.createElement("div");
        emptyDayElement.classList.add("calendar-day", "empty-day");
        calendarGrid.appendChild(emptyDayElement);
      }

      for (let i = 1; i <= daysInMonth; i++) {
        const dayElement = document.createElement("div");
        dayElement.classList.add("calendar-day");

        // disabled dates
        const d = new Date(`${currentYear}-${currentMonthIndex + 1}-${i}`);

        if (d < new Date() || disabledDates.includes(d.toISOString().split("T")[0])) {
          dayElement.classList.add("disabled");
        }

        if (selectedDay?.innerHTML == i) {
          selectedDay = dayElement;
          selectedDay.classList.add("selected");
        }

        dayElement.textContent = i;
        dayElement.addEventListener("click", () => {

          if (!dayElement.classList.contains("disabled")) {
            if (selectedDay) {
              selectedDay.classList.remove("selected");
            }

            selectedDay = dayElement;
            selectedDay.classList.add("selected");

            // not for calendar
            selectedDate = d.toISOString().split("T")[0];

            $(".dateAvailabilities").html(`Availabilities for ${d.toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric' })}`);
            $(".next").attr("disabled", false);
          }
        });
        calendarGrid.appendChild(dayElement);
      }
    }

    prevMonthBtn.addEventListener("click", () => {
      if (currentMonthIndex === 0) {
        currentMonthIndex = 11;
        currentYear--;
      } else {
        currentMonthIndex--;
      }
      updateCalendar();
    });

    nextMonthBtn.addEventListener("click", () => {
      if (currentMonthIndex === 11) {
        currentMonthIndex = 0;
        currentYear++;
      } else {
        currentMonthIndex++;
      }
      updateCalendar();
    });

    updateCalendar();

    function setAvailableTimeSlots() {
      let court = selectedCourt == 1 ? "full" : "half";

      resetSlots();
      for (let i = 10; i <= 16; i += 2) {
        $(`.slot${i}`).addClass("disabled");
      }
      $(".spinner").css("display", "block");

      setTimeout(function () {
        $.get(`/User/booking/getTimeSlotsByDate?booking_type=${court}&date=${selectedDate}`, function (data) {
          console.log(JSON.parse(data));
          data = JSON.parse(data);
          if (data['10:00:00'] === "enabled") {
            $(".slot10").removeClass("disabled");
          }
          if (data['12:00:00'] === "enabled") {
            $(".slot12").removeClass("disabled");
          }
          if (data['02:00:00'] === "enabled") {
            $(".slot14").removeClass("disabled");
          }
          if (data['04:00:00'] === "enabled") {
            $(".slot16").removeClass("disabled");
          }
          $(".spinner").css("display", "none");
        })
      }, 100);


    }

    function slotChosen(slotNum) {
      resetSlots();

      $(`.slot${slotNum}`).css("border", "2px solid #FFDE59");
      $(`.slot${slotNum}`).css("font-weight", "bold");
    }

    function resetSlots() {
      for (let i = 10; i <= 16; i += 2) {
        $(`.slot${i}`).css("background-color", "ghostwhite");
        $(`.slot${i}`).css("font-weight", "");
        $(`.slot${i}`).css("border", "");
      }
    }

  </script>

</body>


</html>