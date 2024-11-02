<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    .main{
        display:flex;
    }
    .d1{
    background-color:#0c2461;
    height:400px;
    padding: 20px;
    flex-basis:50%;
    }
    .d2{
    background-color:#0c2461;
    flex-basis:50%;
    padding-top:50px;
    }
    .tablestyle{
    align:center;
    color:white;
    font-family: "Sofia", sans-serif;
    padding-top:80px;
    border:2px solid white;
    border-radius:8px;
    padding:30px;
    }
    .topic{
    color:white;
    font-family: "Sofia", sans-serif;
    font-size:70px;
    }
    #btn_submit, #btn_clear{
    background-color:#0c2461;
    color:white;
    font-family: "Sofia", sans-serif;
    border:1px;
    border-radius:10px;
    font-size:15px;
    }
    input{
        border-radius: 7px;
    }
    .tblinput{
        border-radius: 8px;
    }
   
</style>   
</head>
<body>
<script>
function validateForm() {
    const name = document.forms[0]["dnt_name"].value;
    const email = document.forms[0]["dnt_mail"].value;
    const amount = document.forms[0]["dnt_amount"].value;
    const date = document.forms[0]["dnt_date"].value;
    const message = document.forms[0]["dnt_msg"].value;

    // Name validation
    if (name.trim() === "") {
        alert("Please enter your name.");
        return false;
    }

    // Email validation (HTML email input already checks format)
    if (email.trim() === "") {
        alert("Please enter a valid email address.");
        return false;
    }

    // Amount validation
    if (amount <= 0) {
        alert("Please enter a donation amount greater than zero.");
        return false;
    }

    // Date validation
    if (date === "") {
        alert("Please select a date.");
        return false;
    }

    // Message validation
    if (message.trim() === "") {
        alert("Please enter a message.");
        return false;
    }

    return true; // If all checks pass, the form can be submitted
}
</script>
<div class="main">
    <div class='d1'>
         <h1 class="topic">Donation Form</h1><br>
</div>
  <div class="d2">
  <form method="POST">
    <table class="tablestyle">
        <tr>
            <td>Name:</td>
            <td class="styletd"><input type="text" name="dnt_name" placeholder="user name" class="tblinput"></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type="email" name="dnt_mail" placeholder="Amila@gmail.com" class="tblinput"></td>
        </tr>
        <tr>
            <td>Amount:</td>
            <td><input type="number" name="dnt_amount" class="tblinput"></td>
        </tr>
        <tr>
        <td>Date:</td>
        <td><input type="date" name="dnt_date" class="tblinput"></td>
        </tr>
        <tr>   
            <td>Massage:</td>
            <td> <textarea name="dnt_msg" class="tblinput"></textarea></td>
        </tr><br>
        <tr>   
            <td></td>
            <td><input type="submit" value="Submit" name="add_submit" id="btn_submit"><input type="reset" value="Clear" id="btn_clear"></td>
        </tr>
      
   </table> 
  </form>  
</div>
</div>   
</body>
</html>
