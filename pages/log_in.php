<?php
include '../database/regDB.php'; // Update path if necessary

// Initialize variables for error messages and user input
$emailErr = $passwordErr = $loginErr = "";
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

    // Authenticate user if there are no validation errors
    if (empty($emailErr) && empty($passwordErr)) {
        $stmt = $conn->prepare("SELECT password FROM USER WHERE email = ?");
        
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            // Verify if the email exists and check the password
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($hashedPassword);
                $stmt->fetch();

                if (password_verify(trim($_POST['password']), $hashedPassword)) {
                    session_start();
                    $_SESSION['email'] = $email;
                    header("Location: dashboard.php");
                    exit;
                } else {
                    $loginErr = "Incorrect password.";
                }
            } else {
                $loginErr = "No account found with that email.";
            }
            
            $stmt->close();
        } else {
            $loginErr = "Error preparing statement: " . $conn->error;
        }
    }

    mysqli_close($conn);
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    /* Centering the login form */
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
        padding: 30px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .error-message {
        color: red;
        font-size: 0.9em;
    }
</style>

<!-- Login Form -->
<div class="container">
    <h2 class="text-center mb-4">Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3">
            <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" required>
            <span class="error-message"><?php echo $emailErr; ?></span>
        </div>
        <div class="mb-3">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
            <span class="error-message"><?php echo $passwordErr; ?></span>
        </div>
        <div class="d-grid">
            <input type="submit" value="Log In" class="btn btn-primary">
        </div>
        <span class="error-message d-block text-center mt-3"><?php echo $loginErr; ?></span>
    </form>
</div>
