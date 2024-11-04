<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container-fluid px-2 my-4 g-3 border border-light">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6">

            <div class="container border border-dark p-4 my-5">
                <h2 class="mb-3">Donate</h2>
                <p>Pawsitive_Home was founded in 2015 to improve the well-being of street pets in Sri Lanka</p>
            </div>

            <div class="container border border-dark p-4 my-5">   
                <h2 class="mt-4">Donation Information</h2>
                <p>I would like to make a donation in the amount of (LKR):</p>

    
                <div class="form-check mb-2">
                    <form method="POST" action = "">    
                        <input type="radio" class="form-check-input" name="amount" id="a1000" value = "1000.00">
                        <label class="form-check-label" for="a1000">Rs 1000</label><br>
    
                        <input type="radio" class="form-check-input" name="amount" id="a2500" value = "2500.00">
                        <label class="form-check-label" for="a2500">Rs 2500</label><br>
    
                        <input type="radio" class="form-check-input" name="amount" id="a5000" value = "5000.00">
                        <label class="form-check-label" for="a5000">Rs 5000</label><br>
    
                        <input type="radio" class="form-check-input" name="amount" id="a10000" value = "10000.00">
                        <label class="form-check-label" for="a10000">Rs 10000</label><br>

                        <input type="radio" class="form-check-input" name="amount" id="a20000" value = "20000.00">
                        <label class="form-check-label" for="a20000">Rs 20000</label><br>
                </div>
   
            </div>

            <div class="container border border-dark p-4 my-5">
                <h2 class="mb-3">I would like my donations to be used for</h2>
                <div class="form-check">
      
                    <input type="radio" class="form-check-input" name="pet" id="pawsitive">
                    <label class="form-check-label" for="pawsitive">Pawsitive_Home</label>
                </div>
            </div>

            <div class="container border border-dark p-4 my-5">
                <h2>Donor Information</h2>

                <div class="mb-2">
                    <label class="form-label" for="FullName" >Full Name:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName">
        
                    <p style="color:darkred;"><i>*Please give the address that is associated with your card</i></p>

                    <label class="form-label" for="Country">Country:</label>
                    <input type="text" class="form-control" id="country" name="country">
        
                    <label class="form-label" for="address">Street Address:</label>
                    <input type="text" class="form-control" id="address" name="address">
     
                    <label class="form-label" for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city">
        
                    <label class="form-label" for="state">State/Province:</label>
                    <input type="text" class="form-control" id="state" name="state">
       
                    <label class="form-label" for="zip">Zip/Postal Code:</label>
                    <input type="text" class="form-control" id="zip" name="zip">
        
                    <label class="form-label" for="ContactNo">Contact No:</label>
                    <input type="text" class="form-control" id="contactNo" name="contactNo">
        
                    <label class="form-label" for="Email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
    
                    <label class="form-label" for="remarks">Remarks:</label>
                    <textarea class="form-control" cols="20" rows="3" name="remarks"></textarea><br>

                    <input type="checkbox" name="agree">
                    <label class="form-label" for="agree">Donate as a gift</label>
                </div>
            </div>

            <div class="container border border-dark p-4 my-5">
                <h2 class="mb-3">Payment Option</h2>
    
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" name="payment" id="visaMaster">
                    <label class="form-check-label" for="visaMaster">Visa / Master</label>
                </div>

                <div class="form-check mb-2 ">
                    <input type="radio" class="form-check-input" name="payment" id="paypal">
                    <label class="form-check-label" for="paypal">Paypal</label>
                </div>

                <button type="submit" class="btn btn-primary mt-3" name="donate">DONATE</button>
                </form>
                </div>
            </div>

        <div class="col-md-6">
            <div>
                <br><br>
                <h2>Security Guarantee</h2>
                <hr>
                <p>For youe protection and peace of mind, all transactions are encrypted and processed on a secure server, so you can submit your credit card details here with confidence.</p>

                <img src="../images/donation/payment-logo.png" alt="payment_details" style="width:400px; height:70px;display: block; margin: 0 auto;">
            </div>
                <br>
            <div>
                <h2>Bank Details</h2>
                <hr>
                <br>
                <p>A/C name: Pawsitive_Home<br>
                    Acc No: 011 890890<br>
                    Bank name: People's Bank<br>
                    Branch: Colombo<br>
                    Bank Code: 7278<br>
                    Branch Code: 175<br>
                    Switch Code: BSAMLKLX</p>
            </div>
        </div>  
    </div>
</div>

<?php 
    $result = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $country = $_POST['country'];
        $streetAddress = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $name = $_POST['fullName'] ;
        $email = $_POST['email'] ;
        $contact = $_POST['contactNo'];
        $postal_code = $_POST['zip'];
        $remark = $_POST['remarks'];
        $amount = $_POST['amount'];

    
        if(empty($name) || empty($email) || empty($contact) || empty($postal_code)  || empty($country) || empty($streetAddress) || empty($city) || empty($state)){
            echo "<b>Please fill the all field.</b>";
        }

        elseif(!preg_match ('/^[A-Za-z]+$/' , $name)){
            echo  "<b>Only letters and spaces allowed in name.</b>";
        }

        elseif( !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<b>Invalid email format.</b>";
        }

        elseif(!preg_match ('/^[0-9]+$/', $contact)){
            echo "<b>Invalid phone number format.</b> ";
        }
    
    $hostname = "localhost";
    $username = "root";
    $password = "Dedu@1225";
    $dbname = "pawsitive";
    $port = 3308;
   
    $conn = mysqli_connect($hostname, $username, $password,$dbname);

    if(!$conn){
        die("Connection failed: " .mysqli_connect_error());
    }


   
    $sql = "CREATE DATABASE IF NOT EXISTS pawsitive";
    if(mysqli_query($conn , $sql)){
        //echo "Database created successfully!.<br>";

    }else{
        //echo "Error creating database: ". mysqli_error($conn);
    }
 
    mysqli_select_db($conn, "pawsitive");

    $sql2 = "DROP TABLE  donations";
    if(!mysqli_query($conn,$sql2)){
    //echo "table delet unsuccessfully!.<br>";
    }


    $table_sql = "CREATE TABLE IF NOT EXISTS donations (
                    donation_id INT PRIMARY KEY AUTO_INCREMENT,
                    donor_name VARCHAR(100),
                    donor_email VARCHAR(100),
                    amount DECIMAL(10, 2) NOT NULL,
                    donation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
                    message TEXT
                )";

    if (mysqli_query($conn, $table_sql)) {
        //echo "Table 'donations' created successfully!<br>";
    } else {
    //echo "Error creating table: " . mysqli_error($conn);
    }

$data_sql = "INSERT INTO donations (donor_name, donor_email, amount, donation_date, message) VALUES
('John Doe', 'johndoe@example.com', 5000.00, '2024-10-05 09:00:00', 'Thank you for your great work!'),
('Jane Smith', 'janesmith@example.com', 1000.00, '2024-10-06 14:30:00', 'Happy to support the animals.'),
('Michael Brown', 'michaelbrown@example.com', 2500.00, '2024-10-07 11:45:00', 'Keep it up!'),
('Sarah Johnson', 'sarahj@example.com', 20000.00, '2024-10-08 17:20:00', 'Wonderful cause, happy to help!'),
('David Wilson', 'davidwilson@example.com', 2000.00, '2024-10-09 10:00:00', 'Best wishes to all the pets!'),
('Linda Miller', 'lindamiller@example.com', 5000.00, '2024-10-10 12:15:00', 'Glad to contribute to such a worthy cause.'),
('Daniel Rodriguez', 'danielrodriguez@example.com', 1000.00, '2024-10-14 16:00:00', 'Grateful for your efforts.');";

if (mysqli_query($conn, $data_sql)) {
//echo "Initial data inserted successfully!<br>";
} else {
//echo "Error inserting data: " . mysqli_error($conn);
}

if(isset($_POST['donate'])){

    $name = $_POST['fullName'] ;
    $email = $_POST['email'] ;
   
    $postal_code = $_POST['zip'];
    $remark = $_POST['remarks'];
    $amount = $_POST['amount'];
    
    $sql1 = "INSERT INTO donations (donor_name, donor_email, amount, donation_date, message) VALUES('$name',' $email','$amount',NOW(),'$remark')";
    if(mysqli_query($conn,$sql1)){
        echo "<div><b><i><p style = 'color:blue;'> Thank you for your donation</p></i></b></div>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
    }
?>


</body>
</html> 