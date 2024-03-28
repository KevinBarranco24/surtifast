<?php
    require "header.php";
?>
<body>
    <div class="container shadow-lg ">
        <div class="row">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/carousel_home/1.jpg" class="carrou">
                    </div>
                    <div class="carousel-item">
                        <img src="image/carousel_home/2.jpg" class="carrou">
                    </div>
                    <div class="carousel-item">
                        <img src="image/carousel_home/3.jpg" class="carrou">
                    </div>
                    <div class="carousel-item">
                        <img src="image/carousel_home/4.jpg" class="carrou">
                    </div>
                    <div class="carousel-item">
                        <img src="image/carousel_home/5.jpg" class="carrou">
                    </div>
                    <div class="carousel-item">
                        <img src="image/carousel_home/6.jpg" class="carrou">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <?php include_once("footer.php"); ?>
