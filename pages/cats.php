<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        .custom-header {
            font-size: 2.5rem;
            color:#0c2461; 
            letter-spacing: 2px;
            font-weight: bold;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); 
            border-bottom: 3px solid #0c2461; 
            padding-bottom: 10px;
            display: inline-block; 
            margin-bottom: 30px;
        }
        .image-card img {
            width:300px;
            height:300px;
            border: 2px solid white;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .image-card:hover img {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .container {
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .description {
            display: none;
            margin-top: 10px;
            font-size: 1rem;
            color: #555;
        }
        .click-btn {
            background-color:#e58e26;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            transition: background-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $(".click-btn").click(function(){
            $(this).siblings(".description").slideToggle(); 
        });
    });
</script>

</head>
<body>
<div class="container overflow-hidden text-center">
    <h2 class=" custom-header mb-5">Our Lovely Cats</h2>
    <div class="row gy-4 border border-light">
        <div class="col-md-4 col-sm-6">
            <div class="p-3 image-card">
                <img src="..\images\categoryimages\cat1.jpg" alt="Cat 1">
            </div>
            <input type="button" value="Click Me" class="click-btn">
            <p class="description">This is a lovely cat who enjoys playful activities and lots of cuddles!</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="p-3 image-card">
                <img src="..\images\categoryimages\cat2.jpeg" alt="Cat 2">
            </div>
            <input type="button" value="Click Me" class="click-btn">
            <p class="description">This is a lovely cat who enjoys playful activities and lots of cuddles!</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="p-3 image-card">
                <img src="..\images\categoryimages\cat3.jpg" alt="Cat 3">
            </div>
            <input type="button" value="Click Me" class="click-btn">
            <p class="description">This is a lovely cat who enjoys playful activities and lots of cuddles!</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="p-3 image-card">
                <img src="..\images\categoryimages\cat4.jpeg" alt="Cat 4">
            </div>
            <input type="button" value="Click Me" class="click-btn">
            <p class="description">This is a lovely cat who enjoys playful activities and lots of cuddles!</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="p-3 image-card">
                <img src="..\images\categoryimages\cat5.jpeg" alt="Cat 5">
            </div>
            <input type="button" value="Click Me" class="click-btn">
            <p class="description">This is a lovely cat who enjoys playful activities and lots of cuddles!</p>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="p-3 image-card">
                <img src="..\images\categoryimages\cat6.jpeg" alt="Cat 6">
            </div>
            <input type="button" value="Click Me" class="click-btn">
            <p class="description">This is a lovely cat who enjoys playful activities and lots of cuddles!</p>
        </div>
    </div>
</div>
</div>
</body>
</html>