<footer class="footer">
    <div class="footer-column tac">
        <h3>About Us</h3>
        <p>Savor Germany was founded by award winning chefs Jeremy and Jessica Nolen. Experience the best of Germany through its food, beer, wine, and culture.</p>
    </div>
    <div class="footer-column tac">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="/2025-tours">2025 Tours</a></li>
            <li><a href="/your-hosts">Your Hosts</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/contact-us">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer-column tac">
        <h3>Contact Us</h3>
        <ul>
        <li><a href="mailto:info@savorgermany.com" class="footer-link">info@savorgermany.com</a></li>
        <li><a href="tel:2672165877" class="footer-link">(267) 216-5877</a></li>
    </div>
    <div class="footer-column tac">
        <h3>Useful Links</h3>
        <ul>
            <li><a href="/privacy-policy" class="footer-link">Privacy Policy</a></li>
            <li><a href="/terms-conditions" class="footer-link">Terms & Conditions</a></li>
        </ul>
    </div>
</footer>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="/../assets/js/scripts.js"></script>

<script>
   function toggleReadMore(button) {
    const container = button.closest('.read-more-container');
    const paragraph = container.querySelector('.text');
    const hiddenText = container.querySelector('.hidden-text');
    const toggleBtn = container.querySelector('.toggle-btn');

    container.classList.toggle('open');

    if (container.classList.contains('open')) {
        // Show hidden text and move the "Read less" button to the end
        hiddenText.style.display = 'inline';
        button.textContent = ' Read less';
        paragraph.appendChild(toggleBtn);  // Move button to the end
    } else {
        // Collapse and reset the button to original position
        hiddenText.style.display = 'none';
        button.textContent = 'Read more...';
        container.querySelector('.text').appendChild(toggleBtn);
    }
}

</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector('[data-bs-target="#exampleModal"]');
    const stickyElement = document.querySelector('.sticky-element');
    const modal = document.querySelector('#exampleModal');

    button.addEventListener('click', function () {
        stickyElement.classList.remove('sticky-element');
    });

    modal.addEventListener('hidden.bs.modal', function () {
        stickyElement.classList.add('sticky-element');
    });
});

</script>

</body>
</html>
