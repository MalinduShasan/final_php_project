<?php 
include '../database/regDB.php'; // Ensure this includes the connection to the database
// Initialize variables to store error messages
$nameErr = $emailErr = $passwordErr = $repeatPasswordErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate Full Name
    if (empty(trim($_POST['fullname']))) {
        $nameErr = "Full name is required.";
    } else {
        $name = trim($_POST['fullname']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed.";
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

    // If no errors, proceed with further processing (like saving to a database)
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($repeatPasswordErr)) {
        // Hash password for security
        $hashedPassword = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        
        // Insert user into database
        $stmt = $conn->prepare("INSERT INTO USER (Full_name, email, password) VALUES (?, ?, ?)");
        
        // Check if prepare() was successful
        if (!$stmt) {
            die("Prepare statement failed: " . $conn->error); // Display error if prepare fails
        }

        // Bind parameters
        if (!$stmt->bind_param("sss", $name, $email, $hashedPassword)) {
            die("Bind parameters failed: " . $stmt->error); // Check for bind error
        }

        // Execute statement and check for success
        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: log_in.php");
            
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

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; 
        margin: 0;
        background-color: #f0f0f0; 
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
        color: red; /* Set error message color to red */
        font-size: 0.9em; /* Optional: make the error message slightly smaller */
    }
    @media (max-width: 600px) {
        .container {
            padding: 20px; 
        }
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Form Body-->
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <input type="text" name="fullname" placeholder="Full name" class="form-control" required value="<?php echo htmlspecialchars($name); ?>">
            <span class="error-message"><?php echo $nameErr; ?></span>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control" required value="<?php echo htmlspecialchars($email); ?>">
            <span class="error-message"><?php echo $emailErr; ?></span>
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
            <span class="error-message"><?php echo $passwordErr; ?></span>
        </div>

        <div class="form-group">
            <input type="password" name="repeat_password" placeholder="Repeat Password" class="form-control" required>
            <span class="error-message"><?php echo $repeatPasswordErr; ?></span>
        </div>

        <div class="form-btn">
            <input type="submit" name="submit1" value="Register" class="btn btn-primary">
        </div>
    </form>
</div>
