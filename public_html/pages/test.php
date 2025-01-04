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

<section class="banner">
        <div class="banner-overlay">
            <h1>Template Page</h1>
            <p>Copy this code and paste it into a new page for editing.</p>
        </div>
    </section>

    <section class="page">
    <div class="page-content">
        <div class="col-12 col-md-6 text-content">
            <h2>Feel free to contact Us for more information! We'd love to hear from you!</h2>
            <p>We're always looking for more suggestions and recommendations in Germany, Austria, and Switzerland. 
            Have a favorite restaurant, Weinstube, or Gasthaus that has incredible food? Let us know!</p>
        </div>
        <div class="col-12 col-md-6 image-content">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header tac">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</section>


<?php include __DIR__ . '/../includes/footer.php'; ?>