<?php
include __DIR__ . '/../config/config.php'; // Relative path to config.php

// Set page-specific metadata
$title = "$website" . " | Breweries of Bavaria & Franconia";
$description = "This is the description for Page 1.";
$keywords = "page1, example, template";
?>

<?php include __DIR__ . '/../includes/header.php'; ?>

<script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
</script>

<div class="video-container">
        <video autoplay muted loop playsinline>
            <source src="/assets/images/bavarian-mountains.mp4" type="video/mp4">       
            Your browser does not support the video tag.
            </video>
        <div class="overlay-text">
            <h1>Oktoberfest 2025</h1>
            <div class="sepsm"></div>
            <h2>Stay Tuned!</h2>
            <h3>We're finalizing our itinerary for the best party in the world!</h3>
        </div>
    </div>
<div class="sepmd hidden-mobile"></div>
<section>
    <div class="page tac">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Coming Soon</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include __DIR__ . '/../includes/footer.php'; ?>
