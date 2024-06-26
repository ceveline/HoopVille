<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
   <style>
    .background {
    min-height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
}

.content {
    height: 650px;
    width: 850px;
    background-color: white;
    display: flex;
    flex-direction: column;
    padding-top: 38px;
    margin: auto;
    margin-top: 204px;
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

.btn {
    margin-top: 20px;
    text-align: center;
}

.btn a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #FFDE59; /* Orange background color */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn a:hover {
    background-color: #F44336; /* Darker orange on hover */
}

.inline-inputs {
    display: flex; /* Use flexbox */
    align-items: center; /* Align items vertically */
    gap: 10px; /* Add some space between inputs */
}

.inline-inputs label {
    flex: 1; /* Take up available space */
    margin-right: 10px; /* Add some space between label and input */
}

.inline-inputs input[type="text"] {
    flex: 1; 
    max-width: 150px; 
    height: 32px; 
    border-radius: 5px; 
    border: 1px solid #ccc; 
    padding: 5px;
}



    </style>

</head>
<body>
<div class="background">
    <div class="content">
        <h1><?= __('Create Profile') ?></h1>
        <form class='register-form' method="post" action="" id="profileForm">
            <div class="inputs">
                <label for="fname" class="form-label"><?= __('First Name') ?></label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="<?= __('Jon') ?>" required>
            </div>
            <div class="inputs">
                <label for="lname" class="form-label"><?= __('Last Name') ?></label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="<?= __('Doe') ?>" required>
            </div>
            <div class="inputs">
                <label for="phoneNumber" class="form-label"><?= __('Phone Number') ?></label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="<?= __('5141231234') ?>" required>
            </div>
            <div class="inputs">
                <label for="dob" class="form-label"><?= __('Date Of Birth') ?></label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="btn">
                <button type="button" onclick="validateForm()"><?= __('Create Profile') ?></button>
            </div>
        </form>
    </div>
</div>

    

    <script>
        function validateForm() {
            //getting all of it
            var phoneNumber = document.getElementById('phoneNumber').value;
            var dob = new Date(document.getElementById('dob').value);
            var today = new Date();

            // phne number
            if (phoneNumber.length !== 10) {
                alert('Phone number must be 10 digits long.');
                return;
            }

            // Check dob
            if (dob >= today) {
                alert('Date of birth must be before today.');
                return;
            }

            // If everythin passes, submit the form
            document.getElementById('profileForm').submit();
        }
    </script>
</body>
</html>