<!-- Link to Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    /* Add padding to prevent content from being hidden behind navbar */
    .content {
        padding-top: 70px; /* Adjust based on navbar height */
    }
</style>

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MyWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="log_in.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
