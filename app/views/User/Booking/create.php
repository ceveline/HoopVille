<!DOCTYPE html>
<html lang="en">

<head>
  <script src="/assets/js/booking/booking.js"></script>

  <link rel="stylesheet" href="/assets/styles/booking.css">
  <title><?= __('Rent a gym') ?></title>

  <style>
    .container {
      height: 500px;
    }

    button {
      margin: 0 20px;
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

    body {
      text-align: center;
    }

    svg {
      height: 40px;
      opacity: 0;
      color: green;
    }

    .containerPayment {
      width: 420px;

      height: 390px;
      margin: 0 auto;
      margin-top: 10px;
      background-color: #fff;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label,
    input {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="submit"] {
      width: 100%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
  </style>

</head>



<body>
  <div class="background">


    <h1><?= __('COURT RENTAL') ?></h1>
    <div class="container">


      <div class="slides">

        <div class="slide slide1">
          <h2><?= __('Select an option') ?></h2>
          <div class="courts">

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
        <div class="slide slide4">
          <div class="spinner"></div>
          <div class="payment">

            <div class="containerPayment">
              <form>
                <label for="name" style='margin-top: 14px'><?= __('Name on Card:') ?></label>
                <input type="text" id="name" name="name" required>
                <label for="card-number"><?= __('Card Number') ?>:</label>
                <input type="text" id="card-number" name="card-number" required>
                <label for="exp-date"><?= __('Expiration Date') ?>:</label>
                <input type="text" id="exp-date" name="exp-date" placeholder="MM/YYYY" required>
                <label for="cvv"><?= __('CVV') ?>:</label>
                <input type="number" id="cvv" name="cvv" required>
                <p style='margin-top: 25px' class="paySummary">
                  <!-- 40.00$ - full court on 2024-04-30 4:00 to 6:00 (PM) -->
                </p>
                <button type="button" style='margin-top: 15px' class="btn btnPay"><?= __('Pay Now') ?></button>
              </form>
            </div>

          </div>
        </div>


      </div>

      <div class="btns">
        <button onclick="prevSlide()" class="prev" disabled><?= __('Back') ?></button>
        <button onclick="nextSlide()" class="next" disabled><?= __('Next') ?></button>
      </div>


    </div>
  </div>

  <script>
    let currentSlide = 1;
    let disabledDates = [];

    let selectedDay = null;

    let selectedTimeSlot = null;

    let currentMonthIndex = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    function slotChosen(slotNum) {
      resetSlots();

      $(`.slot${slotNum}`).css("border", "2px solid #FFDE59");
      $(`.slot${slotNum}`).css("font-weight", "bold");
      $(".next").attr("disabled", false);
      selectedTimeSlot = slotNum;
    }

    function resetSlots() {
      for (let i = 10; i <= 16; i += 2) {
        $(`.slot${i}`).css("background-color", "ghostwhite");
        $(`.slot${i}`).css("font-weight", "");
        $(`.slot${i}`).css("border", "");
      }
    }

    function setTimeSlots(courtType) {
      resetSlots();
      for (let i = 10; i <= 16; i += 2) {
        $(`.slot${i}`).addClass("disabled");
      }
      $(".spinner").css("display", "block");

      setTimeout(function () {
        $.get(
          `/User/booking/getTimeSlotsByDate?booking_type=${courtType}&date=${selectedDate}`,
          function (data) {
            console.log(JSON.parse(data));
            data = JSON.parse(data);
            if (data["10:00:00"] === "enabled") {
              $(".slot10").removeClass("disabled");
            }
            if (data["12:00:00"] === "enabled") {
              $(".slot12").removeClass("disabled");
            }
            if (data["02:00:00"] === "enabled") {
              $(".slot14").removeClass("disabled");
            }
            if (data["04:00:00"] === "enabled") {
              $(".slot16").removeClass("disabled");
            }
            $(".spinner").css("display", "none");
          }
        );
      }, 100);
    }

    const monthNames = [
      "<?= __('January') ?>",
      "<?= __('February') ?>",
      "<?= __('March') ?>",
      "<?= __('April') ?>",
      "<?= __('May') ?>",
      "<?= __('June') ?>",
      "<?= __('July') ?>",
      "<?= __('August') ?>",
      "<?= __('September') ?>",
      "<?= __('October') ?>",
      "<?= __('November') ?>",
      "<?= __('December') ?>",
    ];

    const daysOfWeek = ["<?= __('Sun') ?>", 
      "<?= __('Mon') ?>", 
      "<?= __('Tue') ?>", 
      "<?= __('Wed') ?>", 
      "<?= __('Thu') ?>", 
      "<?= __('Fri') ?>", 
      "<?= __('Sat') ?>"];

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
        const today = new Date();

        if (
          d < today ||
          disabledDates.includes(d.toISOString().split("T")[0]) ||
          d > new Date(today.setMonth(today.getMonth() + 3))
        ) {
          dayElement.classList.add("disabled");
        }

        if (selectedDate === d.toISOString().split("T")[0]) {
          console.log(d.getDate());
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

            selectedDate = d.toISOString().split("T")[0];

            $(".dateAvailabilities").html(
              `<?= __('Availabilities for') ?> ${d.toLocaleDateString()}`
            );
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

    // 1 full, 2 half
    let selectedCourt = 1;

    let selectedDate = null;

    // -------------------
    let bookingTypes = [];

    let hourlyPrice = 0;

    function populateCourts() {
      $.get("/Admin/booking/getBookingTypes", function (data) {
        bookingTypes = JSON.parse(data);
        bookingTypes.forEach((type, index) => {
          $(".courts").append(`
         <div class="court court${index + 1}" onclick="courtClick(${index + 1
            });">
         <div class="courtText">
           <h4>${type.booking_type.charAt(0).toUpperCase() +
            type.booking_type.slice(1)
            } court</h4>
           <p>
             ${type.description}
           </p>
           <svg id="svg${index + 1
            }" xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
             <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none"
               stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
             <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
               d="M352 176L217.6 336 160 272" />
           </svg>
         </div>
       </div>
         `);
        });
      });
    }

    populateCourts();

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
        $.get(
          `/User/booking/disabledDates?booking_type=${selectedCourt == 1 ? "full" : "half"
          }`,
          function (data) {
            disabledDates = JSON.parse(data);
            updateCalendar();
          }
        );

        $(".next").attr("disabled", selectedDay == null);
      }

      if (currentSlide == 3) {
        setAvailableTimeSlots();
      }

      // payment
      if (currentSlide == 4) {
        $(".next").css("display", "none");
        setPaySummary();
      }
    }

    function setPaySummary() {

      $(".paySummary").html(`<?= __('Total payment of') ?> ${(
        bookingTypes[selectedCourt - 1].price * 2
      ).toFixed(2)}$ - ${bookingTypes[selectedCourt - 1].booking_type
        } court <?= __('on') ?> ${selectedDate}<br>${selectedTimeSlot === 10
          ? "10:00 - 12:00"
          : selectedTimeSlot === 12
            ? "12:00 - 2:00"
            : selectedTimeSlot === 14
              ? "2:00 - 4:00"
              : "4:00 - 6:00"
        } (PM)

    `);
    }

    function prevSlide() {
      $(".next").css("display", "block");
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

      hourlyPrice = bookingTypes[courtNum - 1].price;

      $(".next").attr("disabled", false);
      $(".court1").css("background-color", "");
      $(".court2").css("background-color", "");

      $(`svg`).css("opacity", "0");

      $(`#svg${courtNum}`).css("opacity", "0.2");

      // $(`.court${courtNum}`).css("background-color", "#F2F2F2");
      $(".courtChoice").html(`${courtNum === 1 ? "Full" : "Half"} court`);
    }

    updateCalendar();

    function setAvailableTimeSlots() {
      let court = selectedCourt == 1 ? "full" : "half";
      setTimeSlots(court);
    }

    $(".btnPay").on("click", function () {
      if (
        $("#name").val() !== "" &&
        $("#card-number").val() !== "" &&
        $("#exp-date").val() !== "" &&
        $("#cvv").val() !== ""
      ) {
        $(".containerPayment").css("display", "none");
        $(".spinner").css("display", "block");
        setTimeout(function () {
          console.log(bookingTypes);
          $.post("/User/booking/create", {
            booking_type: bookingTypes[selectedCourt - 1].booking_type,
            date: selectedDate,
            start_time:
              selectedTimeSlot === 10
                ? "10:00:00"
                : selectedTimeSlot === 12
                  ? "12:00:00"
                  : selectedTimeSlot === 14
                    ? "2:00:00"
                    : "4:00:00",
            end_time:
              selectedTimeSlot === 10
                ? "12:00:00"
                : selectedTimeSlot === 12
                  ? "2:00:00"
                  : selectedTimeSlot === 14
                    ? "4:00:00"
                    : "6:00:00",
          }).done(function () {
            window.location.href = "/Admin/booking/list";
          });
        }, 400);
      } else {
        alert("Empty field(s).");
      }
    });



  </script>

</body>


</html>