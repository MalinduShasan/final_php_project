<?php 
include '../database/db_connection.php';
// Initialize variables to store error messages
$emailErr = $passwordErr = "";
$email = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
    }

    // If no errors, check the credentials
    if (empty($emailErr) && empty($passwordErr)) {
        // Here you would typically check the credentials against a database
        // For demonstration purposes, let's assume the following:
        $validEmail = "user@example.com";  // Example email
        $validPassword = "password123";     // Example password

        if ($email === $validEmail && $_POST['password'] === $validPassword) {
            echo "<script>alert('Login successful!');</script>";
            // Redirect or start a session for the logged-in user
        } else {
            $passwordErr = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login Form</title>
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
            max-width: 400px; 
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
    </style>
</head>
<body>

<!-- Form Body-->
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control" required value="<?php echo htmlspecialchars($email); ?>">
            <span class="error-message"><?php echo $emailErr; ?></span>
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
            <span class="error-message"><?php echo $passwordErr; ?></span>
        </div>

        <div class="form-btn">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div>
    </form>
</div>

</body>
</html>
