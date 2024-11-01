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
            height: auto;
            max-width: 65%;
            width: 100%;
            box-sizing: border-box;
            margin-left: 100px;
            
        }

        /* donate button style */
        .btn-donate{
            padding: 10px 15px;
            border-radius: 5px; 
            font-size: 30px;
            color: #FFFFFF;
            margin-top: 20px;
            cursor: pointer;
            display: inline-block;
            max-width: 100%;
            box-sizing: border-box;

        }
        .btn-donate:hover {
            background-color: #f6b93b;
        }
        button{
            background-color:#e58e26;
        }
        button:hover{
            background-color: #f6b93b;
        }
        .topic{

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
            margin:40px;
            text-align: center;
            font-size: 18px;
            border-radius: 8px;
            font-size:30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .status-bar-inner-box img {
            width: 90%;
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
        .about-container {
            display: flex;
            height: auto;
            margin-top: 70px;
            flex-wrap: wrap;
            padding: 20px;
            box-sizing: border-box;
        }
        .about-us {
            flex: 3;
            display: flex;
            flex-direction: column;
            text-align: left;
            font-size: 25px;
            padding: 20px;
            box-sizing: border-box;
            max-width: 100%;
        }
        .about-us h1 {
            margin: 0;
        }
        .about-us p {
            margin-top: 10px;
            line-height: 1.5;
        }
        .about-image {
            flex: 2;
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /*contact us*/
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: stretch;
            gap: 50px;
            padding: 30px;
            max-width: 1500px;
            margin: 0 auto;
            margin-top: 70px;
        }
        .contact-heading {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 5px; 
            font-size: 25px;
        }
        .contact-form,
        .map-container {
            flex: 1 1 45%;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-sizing: border-box;
        }
        .contact-form h2 {
            margin-bottom: 20px;
        }
        .contact-form label {
            display: block;
            margin: 10px 0 5px;
            font-size: 25px;
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
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 15px;
        }
        .map-container {
            background-color: #e3e3e3;
            border-radius: 8px;
            padding: 0;
            min-height: 400px;
            box-sizing: border-box;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 8px;
        }

        @media (max-width: 480px) {
            .about-us {
                font-size: 18px;
            }

            .about-image {
                width: 100%;
            }
        }

        @media screen and (max-width: 768px) {
            .header-image {
                height: auto;
                padding-right: 20px;
                padding-left: 20px;
                justify-content: center;
            }          
            .header-text {
                font-size: 24px;
                text-align: center;
                max-width: 100%;
                width: 100%;
                margin-left: 0;
            }

            .btn-donate {
                font-size: 20px;
                width: auto;
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
            }
            .about-us {
                font-size: 20px;
                padding: 10px;
            }
            .about-image {
                margin-top: 20px;
                width: 80%;
            }

            .contact-container {
                flex-direction: column;
            }
            .contact-form,
            .map-container {
                width:100%;
                min-width: auto;
                min-height: 100px;
            }
            .map-container iframe {
                height:450px;
            }             
        }

        @media (min-width: 1200px) {
            .header-text {
                margin-left: 100px;
                
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
                    <!--headder text-->
                    <div class="header-text"> 
                        <h1>ANIMALS NEED Your Help !</h1>
                        You can chip in with money & effort!  Cats, Dogs and Even Raccoons Adopt Any Pet You Like!<br><br>
                        <!--donate now button-->
                        <button class="btn-donate">Donate Now !</button>
                    </div>
                </div>

                <!---adopt cats-->
                <div class="adopt-cat">
                    <h1 class="topic">ADOPT CATS</h1>
                    <h1>Bring a New Cat Home</h1>
                    <p>Ensure your puppies get off to a great start with our company. Whether you are breeding your first litter or 
                        next 'Best in Show' winner, we proudly support dedicated responsible dog breeders like you.
                    </p>
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

                <!--about us-->
                <div class="about-container">
                    <div class="about-us">
                        <h1 class="topic">ABOUT US</h1>
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
                    <div class="contact-heading">
                        <h1 class="topic">CONTACT US</h1>
                    </div>
                    <div class="contact-form">
                   
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1585.151942092131!2d79.95830683063637!3d6.927079199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259cf8f150a75%3A0xe4958dff1d1c4083!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1693507658920!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Form validation script -->
                <script>
                    function validateForm() {
                        const name = document.getElementById("name").value;
                        const email = document.getElementById("email").value;
                        const phone = document.getElementById("phone").value;
                        const address = document.getElementById("address").value;

                        const namePattern = /^[A-Za-z\s]+$/;
                        if (!namePattern.test(name)) {
                            alert("Please enter only letters and spaces for the name.");
                            return false;
                        }

                        if (name === "" || email === "" || phone === "" || address === "") {
                            alert("Please fill in all fields.");
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
