<?php

include __DIR__ . '/config/classes.php'; // Load the classes

// Initialize the ContactFormHandler
$toEmail = "your-email@example.com"; // Replace with your email address
$contactHandler = new ContactFormHandler($toEmail);

// Handle the form submission
$contactHandler->handleFormSubmission();
