ptcApp
=======

[![Build Status](https://travis-ci.org/cMaroon/ptcApp.svg?branch=master)](https://travis-ci.org/cMaroon/ptcApp.svg?branch=master) [![StyleCI](https://github.styleci.io/repos/135825118/shield)](https://github.styleci.io/repos/135825118)

Pateros Technological College Official Website

Requirements
------------

- A PHP 7.1 (or equivalent) environment
- MySQL 5.7+

Deploying
---------

### Applications

- XAMPP
- VUE JS
- NODE JS
- Git Bash (Required)
- VSCODE (Optional)

### Environment

Edit `C:\xampp\apache\conf\extra\httpd-vhosts.conf` and add these code below:

    # Add virtual host if using Apache
    <VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
    </VirtualHost>

    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/ptcApp/public"
        ServerName ptc-edu.ph
    </VirtualHost>

Run Notepad as Administrator then Open and Edit `C:\Windows\System32\Drivers\etc\hosts` file and add these code below:

    127.0.0.1 localhost
    127.0.0.1 ptc-edu.ph

### Quick Start

Create a database: `ptcmaindb.sql`

```bash
# Install Dependencies
$ composer install
$ npm install

~# Run Migrations and Seed
~$ php artisan migrate --seed

# Link storage
$ php artisan storage:link

# If you get an error about an encryption key
$ php artisan key:generate

# Publish Vendors
$ php artisan vendor:publish --tag=ckeditor

# Watch Files
$ npm run dev
```

Default User:

- Name: 
- Username: 
- Email: 
- Password: 
- Role: 

Licence
-------

ptcApp is licensed under AGPL version 3 or later. Please see [the license file](LICENCE) for more information. [tl;dr](https://tldrlegal.com/license/gnu-affero-general-public-license-v3-(agpl-3.0)) if you want to use any code, design or artwork from this project, attribute it and make your project open source under the same licence.
