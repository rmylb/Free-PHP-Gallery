# Free PHP Gallery by adrianTNT.com

## Requirements (example for a fresh Debian 9)

** Note : this requirements are generally set by default on most webhosting. Just check them if you use your own server.

- *apache2*
  - Enable *rewrite* : `a2enmod rewrite`
  - In conf `/etc/apache2/apache2.conf`, set `AllowOverride` from `None` to `All`
- *php7.0*
  - with *php7.0-mbstring* installed

## Installation

- unzip all files from this zip
- edit settings.php file and set your own admin username / password
- upload the files on your server using a FTP program or Adobe Dreamweaver, etc
- access the folder in your browser, e.g www.Example.com/gallery/ 
- you can now click "admin" at the bottom of the page and enter your user/password
- on the admin page you can create 1-2 categories
- visit the gallery main page again, click the categories and then the "Upload photos" button

No database is required for this script, the categories that you create are actual folders on servers, and the name of your photos is taken from the jpg file name.

# New features by rylebrun
- Switch to French langage
- Add filter to search by category name
- Add some tweaks in **settings.php** :
  - Add a string variable to display an introduction on the main page (empty the string to bypass this feature)
  - You can switch between public read-only gallery or allow public upload
  - If you allow public upload, you can switch between public access to pictures or hide pictures for non-admin
  - If you allow public upload, you can switch between anonymous upload or ask a contact email when a file is uploading

# New in version 1.1
- you can now use special characters in category names and photo names, if you notice problems please contact us
- you can upoad multiple photos by FTP and then go to "admin > regenerate images" in order to create thumbnails for them

- note: the new file name of each photo file was changed like this: landscape.jpg, landscape_small.jpg and landscape_thumb.jpg; names like landscape_source.jpg are not longer used

# Known problems


1) The url rewrite doesn't work, e.g /gallery/login shows error but /gallery/login.php works ok
Solution: make sure on server you have the .htaccess in the gallery folder, open .htaccess file and uncomment this line:
RewriteBase /gallery
Replace the path /gallery with your own path if needed

2) Unable to create categories
Solution: check permissions for the *files* folder

3) Unable to access to admin page (or other pages)
Solution: Verify the apache2 rewrite module is enable (and restart apache2)

If you need any help contact us at http://www.adriantnt.com/contact/ or open an issue.
