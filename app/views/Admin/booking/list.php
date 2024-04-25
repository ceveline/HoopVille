<!DOCTYPE html>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<html lang="en">

<head>
  <title>Rent a gym</title>




  <style>
    .container {
      height: 520px;
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


    .filter {
      display: flex;
      align-items: center;
      gap: 8px;
    }


    .bookings {
      height: 340px;
      overflow-y: scroll;
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
  <div style='height: 200px'>
  </div>




  <h1>BOOKINGS</h1>
  <div class="container">


    <div class="topbar">
      <div class="search">


        <p>Search by: </p>
        <select name="filter" class="searchBy">
          <option value="email">email</option>
          <option value="full name">full name</option>
          <option value="date">date</option>
        </select>
        <input type="text" class="searchBar" placeholder="Search.."></input>
        <button class="searchBtn">Search</button>
      </div>


      <div class="filter">
        <p>Filter by status: </p>
        <select name="filter" class="filter">
          <option value="all">all</option>
          <option value="0">pending</option>
          <option value="1">approved</option>
          <option value="2">declined</option>
        </select>
      </div>


    </div>
    <div class="titleBar">


      <p>Booking type</p>
      <p>Email</p>
      <p>Full name</p>
      <p>Booked on</p>
      <p>Status</p>
      <p>Actions</p>


    </div>
    <div class="bookings">
      <?php


      foreach ($data as $booking) {
        $date = $booking->timestamp;
        $date = explode(" ", $date)[0];

        $status = $booking->status == "0" ? "pending" : ($booking->status == "1" ? "approved" : "declined");

        echo " <div class='booking'>
                <p>$booking->booking_type</p>
                <p>test@test.com</p>
                <p>John  Doe</p>
                <p>$date</p>
                <p>$status</p>
                <div class='icons'>
                <i class='fas'>&#xf044;</i>
                <a href='/Admin/booking/delete?id=$booking->booking_id'><i  class='fas del'>&#xf2ed;</i></a>
                </div>
            </div>";
      }


      ?>




    </div>




  </div>


  </div>

  <script>

    let boookings = [];
    let searchBy = "email";

    $('.filter').on('change', function () {

      if (this.value === "all") {
        $.get("/Admin/booking/bookingsList", function(data) {
          bookings = JSON.parse(data);
          console.log(bookings);
          displayBookings();
        }) 
      } else {
        $.get(`/Admin/booking/filterByStatus?status=${this.value}`, function(data) {
          bookings = JSON.parse(data);
          console.log(bookings);
          displayBookings();
        })
      }

    });

    $('.searchBy').on('change', function() {
      searchBy = this.value;
    })

    $(".searchBtn").on('click', function() {
      // search current bookings by field
      const text = $(".searchBar").val();
      
    })

    function displayBookings() {
  
     $(".bookings").html("");
     
      bookings.forEach((b) => {
        const status = b.status == "0" ? "pending" : (b.status == "1" ? "approved" : "declined");
        date = b.date.split(" ")[0];
        $(".bookings").append(`
        <div class='booking'>
          <p>${b.booking_type}</p>
          <p>test@test.com</p>
          <p>John  Doe</p>
          <p>${date}</p>
          <p>${status}</p>
          <div class='icons'>
          <i class='fas'>&#xf044;</i>
          <a href='/Admin/booking/delete?id=${b.booking_id}'><i  class='fas del'>&#xf2ed;</i></a>
          </div>
      </div>
        
        `);
      })

    }

  </script>

</body>

</html>