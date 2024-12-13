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


<div class="row">
    <div class="col-12">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
                <div class="carousel-inner" style="height: 680px !important;">
            <div class="carousel-item active">
            <img class="d-block w-100" src="/assets/images/andechs.jpg" alt="Andechs Monastery">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/bamberg-rathaus.jpg" alt="Bamberg Rathaus">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/munich-meat-market.jpg" alt="Munich Meat Market">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/pretzels-beer.jpg" alt="Pretzels and Beer">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/assets/images/roast-pork.jpg" alt="Roast Pork">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>   
<div class="sepsm"></div>
<div class="row">
    <div class="col-md-12 tac">
        <div class="sepmd"></div>
        <a href="/bavaria-franconia-2025" class="button hidden-mobile" style="font-size: 1.6rem;">Register Your Spot Today</a>
    </div>
</div>
        <div class="sepmd hidden-mobile"></div>
    <div class="constrain">
        <div class="row">
            <div class="col-md-12 tac">
                <h1>Savor the Food, Beer, & Wine of Germany with Two Chefs!</h1>
                <div class="sepsm"></div>
                <p>
                <strong>We are chefs who love to travel and love to eat. </strong> After over twenty years of experience cooking German food and traveling throughout Germany, we decided to share what we've learned.  We've handpicked some of our favorite tours, restaurants, breweries, vineyards, and more to share with you.    
                </p>
                <p><strong>Germany is a country rich in gastronomic heritage and vibrant culinary traditions. </strong>Join us on an unforgettable journey hosted by renowned chefs Jeremy Nolen and Jessica Vogel, authors of the celebrated cookbook “New German Cooking.” Our expertly curated tours are designed to immerse you in the authentic flavors and experiences that make Germany a food and beverage lover's paradise.
                </p>
                <p><strong>A culinary adventure that takes you beyond the typical tourist path, into the heart of Germany's food culture.</strong> With Jeremy and Jessica as your guides, you will discover hidden gems and iconic establishments alike, visiting acclaimed restaurants, charming breweries, and picturesque vineyards. Each destination is carefully selected to showcase the diversity and depth of German cuisine, from hearty regional specialties to innovative modern dishes.</p>
                <p><strong>Our tours offer a unique opportunity to engage with local artisans and producers.</strong> Visit bustling farmer's markets brimming with fresh, seasonal produce, and meet the passionate bakers, butchers, and winemakers who uphold Germany's culinary traditions. Whether you're savoring a perfectly crafted pastry, sampling a robust craft beer, or enjoying a sumptuous meal in a historic restaurant, you'll gain a deeper appreciation for the craftsmanship and dedication that goes into every bite.</p>
                <p><strong>Join us for an unforgettable experience and enrich your understanding of German culinary culture.</strong> Our food and beverage tours are not just about tasting delicious dishes; they're about connecting with the people, stories, and traditions that make German cuisine so special. Prepare to indulge in a journey of flavors with chefs Jeremy Nolen and Jessica Vogel, and create memories that will last a lifetime.</p>
            </div>
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

<?php include __DIR__ . '/../includes/footer.php'; ?>
