<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*body style*/
        body { 
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color:#FFFFFF ;
        }

        .container {
            padding:2px;
        }

        /*header style*/
        .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
        }

        .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px; 
        line-height: 25px;
        border-radius: 4px;
        }

        .header a.logo {
        font-size: 25px;
        font-weight: bold;
        margin-left:10%
        }

        .header a:hover {
        background-color: #ddd;
        color: black;
        }

        .header a.active {
        background-color: #e58e26;
        color: white;
        }

        .header-right {
        float: right;
        padding-right:10%;
        }

        .header-image {
            background-image: url('images/background_image/bgimg.jfif');
            background-size: cover; 
            background-position: center;
            height: 700px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end; 
            padding-right: 50px;
        }

         /* Text on image styles */
         .header-text {
            color: white;
            font-size: 36px;
            font-weight: bold;
            text-align: left;
            padding: 20px;
            border-radius: 8px;
            height: 300px;
            max-width: 50%;
            width: 100%;
        }

        /* donate button style */
        .btn-donate{
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #e58e26;
            font-size: 30px;
            color: #FFFFFF;
            margin-top: 20px;
            cursor: pointer;

        }
        .btn-donate:hover {
        background-color: #f6b93b;
        }
        .topic{
            font-size:35px;
            color: #e58e28;
            font-weight: bold;
        }
        .adopt-cat{
            text-align:center;
            margin-top: 50px;
            padding: 0px 25px 10px 25px; 
            font-size:25px;   
        }
        .p_content{
            font-size: 25px;
        }

        /*image gallery*/
         .row {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            flex-wrap: wrap; 
        }
        .column {
            flex: 1;
            margin: 5px;
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius:5px;
        }
        .column img {
            width: 100%;
            height: 350px;
            object-fit: none;
        }


        /*status bar styles*/
        .status-bar-main-box {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e3e3e3;
            padding: 30px;
            border-radius: 10px;
            margin: 30px;
        }
        .status-bar-inner-container {
            display: flex;
            justify-content: space-between;
            width: 90%;
            gap:20px;
            max-width: 1950px;
        }
        .status-bar-inner-box {
            flex: 1;
            background-color: #f1f1f1;
            padding: 25px;
            text-align: center;
            font-size: 18px;
            border-radius: 8px;
            font-size:30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .status-bar-inner-box img {
            width: 100%;
            height: 300px;
            object-fit: fill;
            border-radius: 5px;
            margin-bottom: 15px;
            
        }
        .status-bar-p{
            color: #e58e26;
            font-weight: bold;
        }

        /*about us*/
        .about-container{
            display: flex;
            height: 500px;
        }
        .about-us{
            flex:3;
            display:flex;
            flex-direction:column;
            text-align:left;
            font-size:25px; 
            padding-left:20px;
            
        }
        .about-image{
            flex:2;
            display:flex;
            width:100%;
            height:auto;
            margin-top:60px;
        }

        /*contact us*/
        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Form styling */
        .contact-form {
            flex: 1;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            margin-bottom: 20px;
        }

        .contact-form label {
            display: block;
            margin: 10px 0 5px;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form input[type="tel"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 100px;
        }

        .contact-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 15px;
        }

        .contact-form button:hover {
            background-color: #45a049;
        }

        /* Map box styling */
        .map-container {
            flex: 1;
            background-color: #e3e3e3;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px;
            width: 100%; /* Full width */
            max-width: 600px; /* Limit maximum width */
            height: 400px; 
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 4px;
        }

        @media screen and (max-width: 768px) {
            .header-image {
                padding: 20px;
                flex-direction: column;
                align-items: flex-start;
            }
            .header-right {
                float: none;
            }
            .header-text {
                font-size: 24px;
                padding: 15px;
                max-width: 100%;
                margin: 0 auto;
            }
            .btn-donate {
                font-size: 18px;
                padding: 10px 15px;
            }

           
            .status-bar-inner-container {
                flex-direction: column;
                align-items: center;
            }
            .status-bar-inner-box {
                width: 100%;
            }

            .column {
                flex: 0 0 100%; 
                margin: 5px 0;
                padding-top:5px;
            }
            .about-container {
                flex-direction: column;
                align-items: center;
                height: auto;
            }
            .about-image {
                margin-top: 40px;
                align-items:center;
            }

            .contact-container {
                flex-direction: column;
                margin-top: 30px; 
            }
           
        }
    </style>
    </head>
        <body>
            <!--header-->
            <div class="container">
                <div class="header">
                <a href="#default" class="logo">Logo</a>
                    <div class="header-right">
                        <a class="active" href="./pages/category.php">CATEGORY</a>
                        <a href="#about">ABOUT</a>
                        <a href="./pages/contact_us.php">CONTACT US</a>
                        <a href="./pages/sign_up.php">REGISTER</a>
                        <a href="./pages/log_in.php">LOGIN</a>
                    </div>
                </div>
                <!--headder image-->
                <div class="header-image">
                    <div class="header-text"> <!--headder text-->
                        <h1>ANIMALS NEED Your Help !</h1>
                        You can chip in with money & effort!  Cats, Dogs and Even Raccoons Adopt Any Pet You Like!<br><br>
                        <button class="btn-donate">Donate Now !</button> <!--donate now button-->
                    </div>
                </div>

                <!---adopt cats-->
                <div class="adopt-cat">
                    <p class="topic">ADOPT CATS</p>
                    <h1>Bring a New Cat Home</h1>
                    <p>Ensure your puppies get off to a great start with our company. Whether you are breeding your first litter or next 'Best in Show' winner, we proudly support dedicated
                    responsible dog breeders like you.</p>
                </div>
                <!--image gallery-->
                <div class="row">
                    <div class="column">
                        <img src="images/image_gallery/cat1.jpg" alt="Image 1">
                        <p>Text for Column 1</p>
                    </div>
                    <div class="column">
                        <img src="images/image_gallery/cat1.jpg" alt="Image 2">
                        <p>Text for Column 2</p>
                    </div>
                    <div class="column">
                        <img src="images/image_gallery/cat1.jpg" alt="Image 3">
                        <p>Text for Column 3</p>
                    </div>
                    <div class="column">
                        <img src="images/image_gallery/cat1.jpg" alt="Image 4">
                        <p>Text for Column 4</p>
                    </div>
                </div>

                <!--status bar-->
                <div class="status-bar-main-box">
                    <div class="status-bar-inner-container">
                        <div class="status-bar-inner-box">
                            <img src="images/status_bar_images/adopted_pets.jpg" alt="Image 1">
                            <p>Pet Adopted</p>
                            <p class="status-bar-p">#</p>
                        </div>
                        <div class="status-bar-inner-box">
                            <img src="images/status_bar_images/pets.jpg" alt="Image 2">
                            <p>How Many Pets</p>
                            <p class="status-bar-p">#</p>
                        </div>
                        <div class="status-bar-inner-box">
                            <img src="images/status_bar_images/users.jpg" alt="Image 3">
                            <p>Users</p>
                            <p class="status-bar-p">#</p>
                        </div>
                    </div>
                </div>

                <div class="about-container">
                    <div class="about-us">
                        <p class="topic">ABOUT US</p>
                        <h1>What Makes Us Care About Pets?</h1>
                        <p>If it wasn’t for our founder’s childhood spent on a ranch in northern Texas, 
                            surrounded by domestic animals and pets all the time till she went to college – 
                            there might have been no Anilove animal shelter now. So as soon as she graduated with 
                            her Veterinary degree 12 years ago, she already knew what she will be doing for a living.
                        </p>
                    </div>
                    <div class="about-image">
                        <img src="images/about_us_image/cat1.jpg" alt="about us image">
                    </div>
                </div>
                
                <!--contact-us-->
                <div class="contact-container">
                    <!-- Form section -->
                    <div class="contact-form">
                    <p class="topic">CONTACT US</p>
                        <form id="contactForm" onsubmit="return validateForm()">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" >

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" >

                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" >

                            <label for="address">Address:</label>
                            <textarea id="address" name="address" ></textarea>

                            <button type="submit">Submit</button>
                        </form>
                    </div>

                    <!-- Map section -->
                    <div class="map-container">  
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0053152362486!2d-122.41941508468134!3d37.77492977975924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064c2c65b17%3A0x5e33f5b5a86b48d9!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1602543923620!5m2!1sen!2s" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Form validation script -->
                <script>
                    function validateForm() {
                        const name = document.getElementById("name").value;
                        const email = document.getElementById("email").value;
                        const phone = document.getElementById("phone").value;
                        const address = document.getElementById("address").value;

                        if (name === "" || email === "" || phone === "" || address === "") {
                            alert("Please fill in all fields.");
                            return false;
                        }

                        const namePattern = /^[A-Za-z\s]+$/;
                        if (!namePattern.test(name)) {
                            alert("Please enter only letters and spaces for the name.");
                            return false;
                        }

                        const phonePattern = /^[0-9]{10}$/;
                        if (!phonePattern.test(phone)) {
                            alert("Please enter a valid 10-digit phone number.");
                            return false;
                        }
                        return true;
                    }
                </script>               
            </div>
        </body>
</html>
