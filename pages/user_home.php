<?php
session_start();
include '../database/regDB.php'; // Ensure this includes the connection to your database

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: log_in.php");
    exit();
}

// Fetch user information from the database
$userId = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT Full_name, email FROM USER WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f0f0f0;
            padding-top: 70px; /* Offset for fixed navbar */
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .user-info {
            margin-bottom: 20px;
        }
        .logout-btn {
            margin-top: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            .navbar-brand img {
                display: none; /* Hide logo on smaller screens */
            }
        }

        @media (max-width: 576px) {
            .container {
                width: 95%;
                padding: 15px;
            }
            .form-group input {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../images/logo/tplogo.png" alt="Pawsitive Home" style="width: 7%;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="log_in.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Dashboard Body -->
<div class="container">
    <h1>Welcome, <?php echo htmlspecialchars($user['Full_name']); ?>!</h1>
    <div class="user-info">
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email'] ?? 'No email found'); ?></p>
    </div>
    <a href="logout.php" class="btn btn-danger logout-btn">Logout</a>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Mu2txYdEdcdPPxysdwSTtfVSjzQKlSh5SFBSTgoxpZ1bP5smydVaRtHeYy+B8X4X" crossorigin="anonymous"></script>
<!-- Sticky Navbar JavaScript -->
<script>
    // Get the navbar
    const navbar = document.getElementById("navbar");

    // Function to add sticky class on scroll
    function stickyNavbar() {
        // Check if the page has scrolled past the navbar's initial position
        if (window.pageYOffset >= navbar.offsetTop) {
            navbar.classList.add("sticky-top"); // Add Bootstrap's sticky-top class
        } else {
            navbar.classList.remove("sticky-top"); // Remove sticky class
        }
    }

    // Attach scroll event listener to window
    window.onscroll = stickyNavbar;
</script>

</body>
</html>
