<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrol in a camp</title>
   <style>
    .background {
    min-height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
}

.content {
    height: 550px;
    width: 850px;
    background-color: white;
    display: flex;
    flex-direction: column;
    padding-top: 38px;
    margin: auto;
    border-radius: 1rem;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.register-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 34px;
}

.last-name {
    display: flex;
}

h1 {
    text-align: center;
}

.register-form label {
    margin-bottom: 5px; 
    width: 140px; 
}

.inputs {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 25px;
}

.cost{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 25px;
    font-weight: bolder;
}

.register-form input[type="text"],

.register-form input[type="date"] {
    width: 248px;
    height: 32px;
    border-radius: 10px;
    padding-left: 10px;
}

button {
    height: 34px;
    width: 124px;
    font-size: 0.93rem;
    margin-top: 18px;
    margin-bottom: 45px;
    border-radius: 0.6rem;
    border: none;
    background-color: #ffda76;
}

button:hover{
    background-color: #fbd467;
}



    </style>

</head>
<body>
    <div class="background">
        <div class="content">
            <h1>Enrol in <?php echo "$data->camp_type!"?></h1>
            <form class='register-form' method="post" action="">
                <!-- Existing input fields -->
                <div class="inputs">
                    <label for="self">Registering for:</label>
                    <input type="radio" id="self" name="register_for" value="self" checked>
                    <label for="self">Myself</label>
                    <input type="radio" id="someone_else" name="register_for" value="someone_else">
                    <label for="someone_else">A guest</label>
                </div>
                
                    
                    <div class="inputs">
                    <label for="guest_fname" class="form-label">Guest's First Name</label>
                    <input type="text" class="form-control" id="guest_fname" name="guest_fname" placeholder="Jon">
                </div>
                <div class="inputs">
                    <label for="guest_lname" class="form-label">Guest's Last Name</label>
                    <input type="text" class="form-control" id="guest_lname" name="guest_lname" placeholder="Doe">
                </div>
                <div class="inputs">
                    <label for="guest_dob" class="form-label">Guest's Date of Birth</label>
                    <input type="date" class="form-control" id="guest_dob" name="guest_dob" placeholder="">
                </div>
              
                <div class="cost">
                <label for="self">Total cost: <?php echo "$data->price"?></label>
                </div>
                <form class='register-form' method="post" action="/User/payment">
                <button type="submit" class="btn" name="action" value="Register">Register</button>
                </form>
            </form>
        </div>
    </div>

</body>
</html>