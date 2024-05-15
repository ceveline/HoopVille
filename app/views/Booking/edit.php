<!DOCTYPE html>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<html lang="en">

<head>
  <link rel="stylesheet" href="/assets/styles/booking.css">
  <link rel="stylesheet" href="/assets/styles/editBooking.css">
  <title><?= __('Update booking') ?></title>
</head>

<body>
  <div class="background">


    <h1><?= __('UPDATE BOOKING') ?></h1>
    <div class="container">

      <?php

      $bookingList = __('Booking list');
      $myAcc = __('My Account');

      if (isset($_SESSION['admin_id'])) {
        echo "<a style='margin-bottom: 20px' href='/Admin/booking/list'>◀ $bookingList</a>";
      } else {
        echo "<a style='margin-bottom: 20px' href='/User/myAccount'>◀ $myAcc</a>";
      }

      ?>


      <div class='slides'>
        <div class='slide slide1'>



          <?php
          $booking = $data;
          $user = $booking->user;
          $profile = $booking->profile;

          $booking_type = ucfirst($booking->booking_type);
          $status = $booking->status === 0 ? __('PENDING') : ($booking->status === 1 ? __('APPROVED') : __('DECLINED'));

          $requestString = "id=$booking->booking_id";

          $date = new DateTime($booking->date);
          $today = new DateTime();

          $updateBtnText = __('Update time or date');

          $cancel = __('Cancel booking');

          $updateBtn = $date < $today ? "" : "<button style='padding: 10px; width: 250px' class='updateBtn'>
        $updateBtnText</button>";

          $approve = __('Approve');
          $decline = __('Decline');

          $changeStatus = $booking->status === 0 && isset($_SESSION['admin_id']) ? "
      <button class='btnApprove'><a style='color:black' href='/Admin/booking/updateStatus?$requestString&status=1'>
      $approve</a></button>
      <button class='btnDecline'><a style='color:black' href='/Admin/booking/updateStatus?$requestString&status=2'>
      $decline</a></button>" : "";


          $userInfo = isset($_SESSION['admin_id']) ? "<label><?= __('User info') ?></label>
        <p><a href='/Profile/infoDetails/$user->user_id'>$profile->first_name $profile->last_name - $user->email</a></p>" : "";

          $bookingDetails = __('Booking details');

          echo " 
        $userInfo
      <label>$bookingDetails</label>
      <p>$booking_type court</p>
      <p>$booking->date</p>
      <p>$booking->start_time to $booking->end_time P.M.</p>
      <div class='status'>
      <p style='margin: 0px; margin-right: 10px'>Status: $status</p>
      $changeStatus
      </div>

      
      $updateBtn
      <a href='/Booking/delete?id=$booking->booking_id' style='color: #dc3545'>
      $cancel</a>
      ";

          ?>
        </div>

        <!-- calendar -->
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

        <!-- Time slot -->
        <div class="slide slide3">
          <h2 class="dateAvailabilities"></h2><br>
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
        </div>

      </div>

      <div class="btns">
        <button onclick="prevSlide()" class="prev"><?= __('Back') ?></button>
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

    function setTimeSlots() {
      resetSlots();
      for (let i = 10; i <= 16; i += 2) {
        $(`.slot${i}`).addClass("disabled");
      }
      $(".spinner").css("display", "block");

      setTimeout(function () {
        $.get(
          `/User/booking/getTimeSlotsByDate?booking_type=<?php echo $booking->booking_type ?>&date=${selectedDate}`,
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


    let selectedDate = '<?php echo date("Y-m-d", strtotime($booking->date)); ?>';


    $(".updateBtn").on('click', function () {
      nextSlide();
    })

    function prevSlide() {
      $(".next").html("Next");
      currentSlide--;
      $(`.slide${currentSlide + 1}`).css('display', 'none');
      $(`.slide${currentSlide}`).css("display", 'block');
      if (currentSlide == 1) {
        $(".btns").css('display', 'none');
      }
    }

    function nextSlide() {
      currentSlide++;
      $(`.slide${currentSlide - 1}`).css('display', 'none');
      $(`.slide${currentSlide}`).css("display", 'block');
      if (currentSlide == 2) {
        $(".btns").css('display', 'flex');
        $.get(`/User/booking/disabledDates?booking_type=<?php echo $booking->booking_type ?>`, function (data) {
          disabledDates = JSON.parse(data);
          console.log(disabledDates);
          updateCalendar();
        })
      }


      // last slide (confirm modifications)
      if (currentSlide == 3) {
        setTimeSlots();
        $(".next").attr('disabled', true);
        $(".next").html("<?= __('Update') ?>");
      }

      if (currentSlide == 4) {
        $(".spinner").css('display', 'block');
        $.ajax({
          type: "POST",
          url: '/Booking/edit',
          data: {
            booking_type: "<?php echo $booking->booking_type ?>",
            date: selectedDate,
            start_time: selectedTimeSlot === 10 ? '10:00:00' : (selectedTimeSlot === 12 ? '12:00:00' : (selectedTimeSlot === 14 ? '2:00:00' : '4:00:00')),
            end_time: selectedTimeSlot === 10 ? '12:00:00' : (selectedTimeSlot === 12 ? '2:00:00' : (selectedTimeSlot === 14 ? '4:00:00' : '6:00:00')),
            status: <?php echo $booking->status ?>,
            id: <?php echo $booking->booking_id ?>
          },
          success: () => {
            window.location.href = '/Booking/edit?id=<?php echo $booking->booking_id ?>';
          },
        })
      }

    }

  </script>



</body>

</html>