<?php

$admin_user = "admin";
$admin_password = "1234";

$settings_page_title = "Galerie photo";
$settings_page_description = "Photo Gallery";

$public_upload = true; // Set to true to allow public upload
$photos_visibility = true; // Set to true to allow photo display

// if you will change thumbnail width or height, then login to admin area and re-generate thumbnails
$settings_thumbnail_width = '200';
$settings_thumbnail_height = '100';

$settings_photo_width = '1200';
$settings_photo_height = '650';

$settings_secret = "iuai4334832987432@#&^%AWDAW";
$settings_gallery_version = "1.0.2";

// Log user email ?
$ask_for_email = true; // Set to true to ask email and store it in a file with the corresponding file name
$email_is_required = false; // Set to true to force the user to set the email before uploading photo
$email_file_path = "contact.csv"; // Check the permissions for www-data on file and folder if you change location outside webroot

$welcome_message = "This is a <strong>welcome message</strong> displayed on the top of the first page."; // Set to false to disable the welcome message
$home_url = "/";

$ask_upload_confirmation = true; // Set to true to add a button to submit (useful when $email_is_required is true !)

?>