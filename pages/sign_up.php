<?php
include '../database/regDB.php'; // Ensure this includes the connection to the database

// Initialize variables to store error messages
$nameErr = $emailErr = $passwordErr = $repeatPasswordErr = "";
$firstNameErr = $lastNameErr = $phoneErr = $addressErr = $zipCodeErr = "";
$username = $email = $first_name = $last_name = $phone_number = $address = $zip_code = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate Username
    if (empty(trim($_POST['username']))) {
        $nameErr = "Username is required.";
    } else {
        $username = trim($_POST['username']);
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            $nameErr = "Only letters, numbers, and underscores allowed.";
        }
    }

    // Validate Full Name
    if (empty(trim($_POST['first_name']))) {
        $firstNameErr = "First name is required.";
    } else {
        $first_name = trim($_POST['first_name']);
        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
            $firstNameErr = "Only letters and white space allowed.";
        }
    }

    if (empty(trim($_POST['last_name']))) {
        $lastNameErr = "Last name is required.";
    } else {
        $last_name = trim($_POST['last_name']);
        if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
            $lastNameErr = "Only letters and white space allowed.";
        }
    }

    // Validate Email
    if (empty(trim($_POST['email']))) {
        $emailErr = "Email is required.";
    } else {
        $email = trim($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }

    // Validate Password
    if (empty(trim($_POST['password']))) {
        $passwordErr = "Password is required.";
    } elseif (strlen(trim($_POST['password'])) < 6) {
        $passwordErr = "Password must be at least 6 characters.";
    }

    // Validate Repeat Password
    if (empty(trim($_POST['repeat_password']))) {
        $repeatPasswordErr = "Please repeat your password.";
    } else {
        $repeatPassword = trim($_POST['repeat_password']);
        if ($repeatPassword !== trim($_POST['password'])) {
            $repeatPasswordErr = "Passwords do not match.";
        }
    }

    // Validate Phone Number
    if (!empty(trim($_POST['phone_number']))) {
        $phone_number = trim($_POST['phone_number']);
        if (!preg_match("/^[0-9]*$/", $phone_number)) {
            $phoneErr = "Invalid phone number.";
        }
    }

    // Validate Address
    if (empty(trim($_POST['address']))) {
        $addressErr = "Address is required.";
    } else {
        $address = trim($_POST['address']);
    }

    // Validate Zip Code
    if (!empty(trim($_POST['zip_code']))) {
        $zip_code = trim($_POST['zip_code']);
        if (!preg_match("/^[0-9]*$/", $zip_code)) {
            $zipCodeErr = "Invalid zip code.";
        }
    }

    // If no errors, proceed with further processing (like saving to a database)
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($repeatPasswordErr) &&
        empty($firstNameErr) && empty($lastNameErr) && empty($phoneErr) && empty($addressErr) && empty($zipCodeErr)) {
        
        // Hash password for security
        $hashedPassword = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        
        // Prepare the insert statement
        $stmt = $conn->prepare("INSERT INTO users (username, password_hash, email, first_name, last_name, phone_number, address, zip_code, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'user')");
        
        // Check if prepare() was successful
        if (!$stmt) {
            die("Prepare statement failed: " . $conn->error); // Display error if prepare fails
        }

        // Bind parameters
        if (!$stmt->bind_param("sssssssss", $username, $hashedPassword, $email, $first_name, $last_name, $phone_number, $address, $zip_code)) {
            die("Bind parameters failed: " . $stmt->error); // Check for bind error
        }

        // Execute statement and check for success
        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: log_in.php");
            exit();
        } else {
            echo "Execution failed: " . $stmt->error; // Display execution error
        }

        // Close the statement
        $stmt->close();
    }

    // Close the connection only when you're done with all DB operations
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        /* Custom styles */
        body {
            background-color: #f0f0f0;
            padding-top: 70px; /* Offset for fixed navbar */
        }
        .container {
            max-width: 600px;
            width: 90%;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-btn {
            text-align: center;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
        }

        .emp{
            height: 300px;
        }

    </style>
</head>
<body>

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../images/logo/tplogo.png" alt="Pawsitive Home" style="width: 7%;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="log_in.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="emp">

</div>
<!-- Form Body - Centered -->
<div class="d-flex justify-content-center align-items-center vh-100" class = "f1">
    <div class="container">
        <h2 class="text-center">Sign Up</h2> <!-- Heading added here -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required value="<?php echo htmlspecialchars($username); ?>">
                <span class="error-message"><?php echo $nameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required value="<?php echo htmlspecialchars($first_name); ?>">
                <span class="error-message"><?php echo $firstNameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required value="<?php echo htmlspecialchars($last_name); ?>">
                <span class="error-message"><?php echo $lastNameErr; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required value="<?php echo htmlspecialchars($email); ?>">
                <span class="error-message"><?php echo $emailErr; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <span class="error-message"><?php echo $passwordErr; ?></span>
            </div>
            <div class="form-group">
                <label for="repeat_password">Repeat Password</label>
                <input type="password" name="repeat_password" id="repeat_password" class="form-control" required>
                <span class="error-message"><?php echo $repeatPasswordErr; ?></span>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" value="<?php echo htmlspecialchars($phone_number); ?>">
                <span class="error-message"><?php echo $phoneErr; ?></span>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required value="<?php echo htmlspecialchars($address); ?>">
                <span class="error-message"><?php echo $addressErr; ?></span>
            </div>
            <div class="form-group">
                <label for="zip_code">Zip Code</label>
                <input type="text" name="zip_code" id="zip_code" class="form-control" value="<?php echo htmlspecialchars($zip_code); ?>">
                <span class="error-message"><?php echo $zipCodeErr; ?></span>
            </div>
            <div class="form-btn">
                <input type="submit" name="submit1" value="Register" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Mu2txYdEdcdPPxysdwSTtfVSjzQKlSh5SFBSTgoxpZ1bP5smydVaRtHeYy+B8X4X" crossorigin="anonymous"></script>

</body>
</html>
