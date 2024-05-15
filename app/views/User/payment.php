<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment information</title>
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
    background-color: #FFDE59; 
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn a:hover {
    background-color: #F44336; 
}

.inline-inputs {
    display: flex; 
    align-items: center; 
    gap: 10px; 
}

.inline-inputs label {
    flex: 1; 
    margin-right: 10px; 
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
        <h1><?=__('Payment Information')?></h1>
        <form class='register-form' method="post" action="">
        
            <div class="inputs">
                <label for="fname" class="form-label"><?=__('Full Name')?></label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="<?=__('Jon')?>" required>
            </div>
            <div class="inputs">
                <label for="cardNumber" class="form-label"><?=__('Card Number')?></label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="<?=__('4724090478569843')?>" required>
            </div>
            <div class="inputs">
                <label for="CVV" class="form-label"><?=__('CVV')?></label>
                <input type="text" class="form-control" id="CVV" name="CVV" placeholder="<?=__('123')?>" required>
            </div>
            <div class="inputs">
                <label for="expiryDate" class="form-label"><?=__('Expiry Date')?></label>
                <input type="date" class="form-control" id="expiryDate" name="expiryDate">
            </div>
            
            <div class="inputs">
                <label for="Country" class="form-label"><?=__('Country')?></label>
                <input type="text" class="form-control" id="Country" name="expiryDate" placeholder="<?=__('Canada')?>" required>
            </div>
            <div class="inputs">
                <label for="Province" class="form-label"><?=__('Province')?></label>
                <input type="text" class="form-control" id="Province" name="expiryDate" placeholder="<?=__('QC')?>" required>
            </div>
            <div class="inputs">
                <label for="Code" class="form-label"><?=__('Zip Code')?></label>
                <input type="text" class="form-control" id="Code" name="expiryDate" placeholder="<?=__('1X1 X1X')?>" required>
            </div>
            
            <div class="btn">
                <button type="button" onclick="validatePayment()"><?=__('Process Payment')?></button>
            </div>
        
        </form>
    </div>
</div>


    <script>
        function validatePayment() {
            var cardNumber = document.getElementById("cardNumber").value.trim();
            var CVV = document.getElementById("CVV").value.trim();

            if (!/^\d{16}$/.test(cardNumber)) {
                alert("Please enter a valid 16-digit card number.");
                return;
            }

            if (!/^\d{3}$/.test(CVV)) {
                alert("Please enter a valid 3-digit CVV.");
                return;
            }

            // submit if everythingh passes
            window.location.href = "/User/myAccount";
        }
    </script>
</body>
</html>