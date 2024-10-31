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
        background-color: dodgerblue;
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
            background-color: #e58e28;
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

         /* Container for columns */
         .row {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            flex-wrap: wrap; 
        }

        /* Individual columns */
        .column {
            flex: 1;
            margin: 10px;
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
            font-size: 18px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius:5px;
        }

        .column img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

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
            height:auto;
        }
        .about-image{
            flex:2;
            display:flex;
            width:250px;
            height:400px;
            margin-top:60px;
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
            .column {
                flex: 0 0 100%; 
                margin: 5px 0;
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

                <div class="row">
                    <div class="column">
                        <img src="images/cat1.jpg" alt="Image 1">
                        <p>Text for Column 1</p>
                    </div>
                    <div class="column">
                        <img src="images/cat1.jpg" alt="Image 2">
                        <p>Text for Column 2</p>
                    </div>
                    <div class="column">
                        <img src="images/cat1.jpg" alt="Image 3">
                        <p>Text for Column 3</p>
                    </div>
                    <div class="column">
                        <img src="images/cat1.jpg" alt="Image 4">
                        <p>Text for Column 4</p>
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
                            <img src="images/cat1.jpg" alt="about us image">
                    </div>
                </div>
            </div>
        </body>
</html>
