<?php
include __DIR__ . '/../config/config.php'; // Relative path to config.php

// Set page-specific metadata
$title = "$website" . " - Photo Gallery";
$description = "Photos of tours of Germany.";
$keywords = "page1, example, template";
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
</script>
<div class="header-top"></div>

<section class="headless-page">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
</section>

<div class="sepxl"></div>
    <div class="constrain">
    <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/assets/images/roast-pork.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/assets/images/bamberg-rathaus.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="/assets/images/bergkaese.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        <div class="seplg"></div>
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 tac">
            <div id="fd-form-6672feb8d8e8af728f2b106d"></div>
                <script>
                    window.fd('form', {
                        formId: '6672feb8d8e8af728f2b106d',
                        containerEl: '#fd-form-6672feb8d8e8af728f2b106d'
                    });
                </script>
            </div>
        </div>
    </div>
<div class="seplg"></div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
