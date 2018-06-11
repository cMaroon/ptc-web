# Setting up your development environment

There are a few different options to get started:

### Install prerequisites
- MySQL 5.7
- PHP 7.1+ (with curl, gd, intl, json, mbstring, mcrypt, mysql, xml and zip extensions)
- xampp (or other webserver)
- a modern version of nodejs (and npm)
- redis (not required, but you may want to use for caching and laravel's job-queue)

### Clone the git repository
    $ git clone https://github.com/Twiistrz/tlibr-web.git

### Configure .env file
```bash
# copy the example file and edit the settings
$ cp .env.example .env
```

### URL rewriting
Laravel includes a `public/.htaccess` file that is used to provide URLs without the `index.php` front controller in the path. Before serving Laravel with Apache, be sure to enable the `mod_rewrite` module so the `.htaccess` file will be honored by the server.

If the .htaccess file that ships with Laravel does not work with your Apache installation, try this alternative:

```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

### Install Packages and build assets
```bash
$ composer install
$ npm install
$ php artisan migrate --seed
$ php artisan storage:link
$ php artisan key:generate
# build assets
$ npm run dev
# Generating assets while developing
$ npm run watch
```