<!DOCTYPE html>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<html lang="en">

<link rel="stylesheet" href="/assets/styles/booking.css">

<head>

  <title><?= __('Rent a gym') ?></title>

  <style>
    .container {
      height: 488px;
      /* min-height: 100%; */
      width: 1000px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30px;
      background-color: ghostwhite;
      border-radius: 10px;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      overflow-y: scroll;
    }

    h1 {
      padding: 10px;
      color: black;
      background-color: #FFDE59;
    }


    header {
      background-color: black;
    }

    body {
      background: lightgray;
      text-align: center;
    }

    .topbar {
      /* width: 1000px; */
      padding: 40px;
      display: flex;
      align-items: center;
      gap: 8px;
      justify-content: space-between;
    }

    input {
      height: 30px;
      width: 350px;
      border: 1px solid lightgray;
      border-radius: 10px;
      padding-left: 10px;
    }

    button {
      background-color: #FFDE59;
      cursor: pointer;
      height: 30px;
      width: 80px;
      border-radius: 10px;
      border: none;


      /* add also in bookings create for user */
      transition: 0.2s;
    }


    button:hover {
      transition: 0.2s;
      background-color: #FFCE00;
    }


    select {
      border: 1px solid lightgray;
      height: 30px;
      border-radius: 10px;
      padding: 0 5px 0 5px;
      cursor: pointer;
      font-size: 14px;
    }


    .filterBox {
      display: flex;
      align-items: center;
      gap: 8px;
    }


    .bookings {
      height: 340px;
      /* padding-left: 5px; */
    }


    .booking {
      height: 70px;
      display: flex;
      align-items: center;
      padding-left: 10px;
      padding-right: 10px;
      justify-content: space-between;
      border-top: 1px solid lightgray;
      cursor: pointer;
      transition: 0.3s;
    }


    .booking:hover {
      background-color: lightgray;
      transition: 0.3s;
    }


    .titleBar {
      opacity: 0.3;
      background-color: #FFCE00;
      font-weight: bold;
      height: 70px;
      /* border: 1px solid red; */
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-left: 10px;
      padding-right: 40px;
    }


    .search {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .icons {
      opacity: 0.6;
      display: flex;
      gap: 14px;
      align-items: center;
      transition: 0.2s;
    }


    i {
      font-size: 22px;
    }



    .fas {
      transition: 0.2s;
    }


    .fas:hover {
      color: green;
    }


    .del:hover {
      color: red;
      transition: 0.2s;
    }

    a {
      color: black;

    }
  </style>


</head>


<body>

  <h1><?= __('BOOKINGS') ?></h1>
  <div class="container">


    <div class="topbar">
      <div class="search">


        <p><?= __('Sort by date') ?>: </p>
        <select class="sortBy">
          <option value="DESC"><?= __('Recent first') ?></option>
          <option value="ASC"><?= __('Oldest first') ?></option>
        </select>
        <input type="text" class="searchBar" placeholder="<?= __('Search by email') ?>"></input>
        <button class="searchBtn"><?= __('Search') ?></button>
      </div>


      <div class="filterBox">
        <p><?= __('Filter by status') ?>: </p>
        <select class="filter">
          <option value="all"><?= __('all') ?></option>
          <option value="0"><?= __('pending') ?></option>
          <option value="1"><?= __('approved') ?></option>
          <option value="2"><?= __('declined') ?></option>
        </select>
      </div>


    </div>
    <div class="titleBar">


      <p><?= __('Booking type') ?></p>
      <p>Email</p>
      <p><?= __('Full name') ?></p>
      <p><?= __('Booked on') ?></p>
      <p>Status</p>
      <p>Actions</p>


    </div>
    <div class="bookings">
      <?php



      foreach ($data as $booking) {
        $date = $booking->timestamp;
        $date = explode(" ", $date)[0];

        $status = $booking->status == "0" ? __('pending') : ($booking->status == "1" ? __('approved') : __('declined'));
        $user = $booking->user;
        $profile = $booking->profile;

        echo " <div class='booking'>
                <p>$booking->booking_type</p>
                <p>$user->email</p>
                <p>$profile->first_name $profile->last_name</p>
                <p>$date</p>
                <p>$status</p>
                <div class='icons'>
                
                
                <a href='/Booking/edit?id=$booking->booking_id'><i class='fas'>&#xf044;</i></a>
                <a href='/Booking/delete?id=$booking->booking_id'><i  class='fas del'>&#xf2ed;</i></a>
                </div>
            </div>";
      }

      ?>

    </div>




  </div>


  </div>

  <script>

    let boookings = [];
    let sortBy = "ASC";

    function initBookings() {
      $.get("/Admin/booking/bookingsList", function (data) {
        bookings = JSON.parse(data);
      });
    }

    initBookings();


    $('.filter').on('change', function () {
      console.log("test");
      bookings = [];
      $(".bookings").html("");

      let url = this.value === "all" ? "/Admin/booking/bookingsList" : `/Admin/booking/filterByStatus?status=${this.value}`;

      $.get(url, function (data) {
        bookings = JSON.parse(data);
        displayBookings();
      })
    });

    $('.sortBy').on('change', function () {
      sortBy = this.value;
      bookings.sort(compareDates);
      displayBookings();
    })

    function compareDates(a, b) {
      return new Date(sortBy === "ASC" ? a.date : b.date) - new Date(sortBy === "ASC" ? b.date : a.date);
    }

    $(".searchBtn").on('click', function () {
      // search current bookings by field
      const email = $(".searchBar").val();
      $.get(`/Admin/booking/searchBookingsByEmail?email=${email}`, function (data) {
        bookings = JSON.parse(data);
        displayBookings();
      })
    })

    function displayBookings() {

      $(".bookings").html("");

      bookings.forEach((b) => {
        const status = b.status == "0" ? "pending" : (b.status == "1" ? "approved" : "declined");
        date = b.date.split(" ")[0];
        $(".bookings").append(`
        <div class='booking'>
          <p>${b.booking_type}</p>
          <p>${b.user.email}</p>
          <p>${b.profile.first_name} ${b.profile.last_name}</p>
          <p>${date}</p>
          <p>${status}</p>
          <div class='icons'>
          <a href='/Booking/edit?id=${b.booking_id}'><i class='fas'>&#xf044;</i></a>
          <a href='/Booking/delete?id=${b.booking_id}'><i  class='fas del'>&#xf2ed;</i></a>
          </div>
      </div>
        
        `);
      })

    }

  </script>

</body>

</html>