<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function(){
        $(".card img").hover(
        function() {
            $(this).css({
                "transform": "scale(1.1)",
                "box-shadow": "0 4px 8px rgba(0, 0, 0, 0.2)"
            });
        },
        function() {
            $(this).css({
                "transform": "scale(1)",
                "box-shadow": "none"
            });
        }
        );
        });
    </script>


    <style>
        
        .hero-section {
            background-color:#82ccdd;
            padding: 50px;
            border-radius: 15px;
            margin-top: 30px;
        }
        .hero-section h1 {
            font-weight: bold;
            color:#0c2461;
        }
        .hero-section p {
            color: #333333;
        }
        .card img {
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
        }
        
    </style>
</head>
<body>

    <section class="container hero-section text-center my-5">
        <h1>----SAVE A LIFE! ADOPT A PET!----</h1>
        <p class="fs-5">Adopting a pet is more than adding an animal to your home-it's welcoming a loyal friend who will bring joy, love, and companionship. Each pet has a unique story and is waiting for a second chance at happiness. Bring home a forever friend today!</p>
    </section>



 <!--Pets -->
 <section id="pets" class="container my-5">
        <h2 class="text-center mb-4">Meet Our Adorable Pets</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                <a href="cats.php"><img src="..\images\categoryimages\cat.jpg" class="card-img-top" alt="Cat"></a>
                    <div class="card-body">
                        <h5 class="card-title">Cat</h5>
                        <p class="card-text">This sweet cat is playful and loves to cuddle. Ready for her forever home!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                <a href="dogs.php"><img src="..\images\categoryimages\dog.jpg" class="card-img-top" alt="Dog"></a>
                    <div class="card-body">
                        <h5 class="card-title">Dog</h5>
                        <p class="card-text">Dog is loyal and energetic, always up for an adventure. He’d make a great companion!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                <a href="otherspet.php"><img src="..\images\categoryimages\rabbit.jpg" class="card-img-top" alt="Rabbit"></a>
                    <div class="card-body">
                        <h5 class="card-title">Others</h5>
                        <p class="card-text">Gentle and curious,looking for a cozy home to explore and relax.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>