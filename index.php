<div class="">
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*body style*/
        body { 
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #9AECDB;
        }

        
        * {box-sizing: border-box;}

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
            height: 750px;
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
            height: 400px;
            max-width: 50%;
        }

        /* donate button style */
        .btn-donate{
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #EAB543;

        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            
            .header-right {
                float: none;
            }

            .header-text {
                font-size: 24px;
                padding: 10px;
            }
        }
    </style>

        <body>
            <!--headder-->
            <div class="header">
            <a href="#default" class="logo">Logo</a>
                <div class="header-right">
                    <a class="active" href="#home">GALLARY</a>
                    <a href="#about">ABOUT</a>
                    <a href="#contact_us">CONTACT US</a>
                    <a href="#register">REGISTER</a>
                    <a href="#sign_up">SIGN UP</a>
                </div>
            </div>
            <!--headder image-->
            <div class="header-image">
                <div class="header-text"> <!--headder text-->
                    <h1>ANIMALS NEED Your Help!</h1>
                    You can chip in with money & effort!  Cats, Dogs and Even Raccoons Adopt Any Pet You Like!<br><br>
                    <button class="btn-donate">Donate Now !</button>
                </div>
            </div>
        </body>
</div>
