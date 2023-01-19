# first-project-laravel

class diagram : https://dbdiagram.io/d/63c70394296d97641d7a4bea

methodologie : https://trello.com/b/qUF8dvxN/laravel

Laravel: https://laravel.com/docs/8.x/passport

# Environnement set:
Composer: https://getcomposer.org/download/

Install Laragon: https://laragon.org/docs/install.html

phpMyAdmin: https://drive.google.com/file/d/10TfltN-yASbNX5sXxlhA4848biFAXXtj/view ```(extract the folder and put it under laragon/etc/apps)```
# Command-line:

## Authentification 
```
$ composer require laravel/breeze --dev
$ php artisan breeze:install
$ php artisan migrate
$ npm install
$ npm run dev
$ php artisan serve
```
## Migrations:
```
$ php artisan make:migration create_categories_table
$ php artisan make:migration create_produits_table

* create model "Categorie": 
$ php artisan make:model Categorie

* create a controller for "product" with these functions (index,show,store,create,edit,update,delete)
$ php artisan make:controller ProduitController --resource
```
