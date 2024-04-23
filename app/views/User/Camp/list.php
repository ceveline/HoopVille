<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Review</title>
    <style>
        * {
            margin: 0;
            color: white;
        }

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
      text-align: center;
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

    

    h1{
        text-align: center;
    }

    h2{
        color: black;
        text-align: center;
        margin-bottom: 10px;
    }

     header {
      background-color: black;
    }

    body {
      background: lightgray;
      text-align: center;
      color: black;
     
  align-items: center;
    }

    .purchaseType{
        color:black;
       
    }

    .rating {
  display: inline-flex;
  flex-direction: row-reverse;
  align-items: center;
}

input[type="radio"] {
  display: none;
}

label {
  cursor: pointer;
  width: 30px;
  height: 30px;
  background-image: url('/assets/images/star-empty-icon.webp');
  background-size: cover;
}

input[type="radio"]:checked ~ label {
  background-image: url('/assets/images/star_icon_full.png');
}

input[type="text"]{
    color: black;
}

option,select{
    color:black;
}

textarea{
    color:black;
    margin:
}

.form-container {
  display: flex;
  flex-direction: column;
}

.form-section {
  margin-bottom: 50px;
}
    

    </style>
</head>
<body>
<div style='height: 200px'>
  </div>
    <h1>NEW REVIEW</h1>
    <div class='container'> 
    <form class="form-container">
    <div class="form-section">
      <h2>Select Purchase for your review</h2>
      <select id="purchaseType">
        <option value="fullCourt">Full Court</option>
        <option value="halfCourt">Half Court</option>
        <option value="Camp">Camp</option>
        <option value="Membership">Membership</option>
      </select>
    </div>

    <div class="form-section">
      <h2>Enter your Review</h2>
      <textarea name="review_text" class="black-text" rows="5" cols="50" required></textarea>
    </div>

    <div class="form-section">
      <h2>Select Your Rating</h2>
      <div class="rating">
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1"></label>
      </div>
    </div>

    <div class="form-section">
    <button type="submit">Create Review</button>
    </div>
  </form>
    </div>
    

    
</body>
<<<<<<< HEAD
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camps</title>
    <style>
        * {
            margin: 0;
            color: white;
        }

        .container {
            display: flex;
            justify-content: space-evenly;
            margin-top: 30px;
        }

        .form-container {
          height: 400px;
    width: 300px;
    background-color: ghostwhite;
    border-radius: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding: 10px;
    align-items: center;
    display: flex; /* Added */
    flex-direction: column; /* Added */
    justify-content: center; /* Added */
        }

        h1 {
            padding: 10px;
            color: black;
            background-color: #FFDE59;
            text-align: center;
        }

        button {
            margin: 0 20px;
            background-color: #FFDE59;
            height: 40px;
            width: 225px;
            cursor: pointer;
            border: none;
            color: black;
            border-radius: 10px;
            margin-top: auto;
        
        }

        button:hover {
            transition: 0.2s;
            background-color: #FFCE00;
        }

        h1 {
            text-align: center;
        }

        h2 {
            color: black;
            text-align: center;
            margin-bottom: 10px;
        }

        header {
            background-color: black;
        }

        body {
            background: lightgray;
            text-align: center;
            color: black;
            align-items: center;
        }

        .purchaseType {
            color: black;
        }

        .rating {
            display: inline-flex;
            flex-direction: row-reverse;
            align-items: center;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            cursor: pointer;
            width: 30px;
            height: 30px;
            background-image: url('/assets/images/star-empty-icon.webp');
            background-size: cover;
        }

        input[type="radio"]:checked~label {
            background-image: url('/assets/images/star_icon_full.png');
        }

        input[type="text"] {
            color: black;
        }

        option,
        select {
            color: black;
        }

        textarea {
            color: black;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .camp-image {
    width: 250px;
    height: 150px;
    margin-right: 5px;
    border-radius: 20px;
    margin-bottom: 10px;
    object-fit: cover; /* Changed from 'contain' to 'cover' for a better fit */
    box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 8px 0px; /* Added a subtle shadow */
    transition: transform 0.3s ease; /* Added a transition for a hover effect */
}

        .form-container:hover {
    background-color: #F4F4F4; /* Light gray background on hover */
    transform: scale(1.03); /* Scale up by 5% */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition for background color and scale */
}
.form-container h3 {
            margin-top: -30px; /* Adjust to position the heading above the container */
            padding: 5px;
            border-radius: 10px;
            background-color: black; /* Yellow background color */
            text-align: center;
            width: 100%;
            color: white;
            margin-bottom: 10px;
            font-size: 18px; /* Adjust font size as needed */
        }

        .btn{
          margin-top: 45px;
          font-weight: bold;
        }

        p{
          color: black;
        }

        h3{
          
            color: black;
            background-color: #FFDE59;
            text-align: center;
            width: 100%;
        }

    </style>
</head>
<body>
    <div style='height: 200px'></div>
    <h1>CAMPS</h1>
    <div class='container'>
        <div class="form-container">
            <h3>Winter Camp</h3> 
            <img src="/assets/images/spring.png" alt="Spring Camp" class="camp-image">
            <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="btn"> <button type="button">Join Now!</button></div>
        </div>
        <div class="form-container">
            <h3>Spring Camp</h3> 
            <img src="/assets/images/spring.png" alt="Spring Camp" class="camp-image">
            <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="btn"> <button type="button">Join Now!</button></div>
        </div>
        <div class="form-container">
            <h3>Summer Camp</h3> 
            <img src="/assets/images/spring.png" alt="Spring Camp" class="camp-image">
            <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="btn"> <button type="button">Join Now!</button></div>
        </div>
    </div>
</body>
</html>
=======
</html>
>>>>>>> parent of cea66d6 (camp list page)
