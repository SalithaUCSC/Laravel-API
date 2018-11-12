# Laravel_API

## REST API implemented using Laravel PHP framework

### Instructions:

1. Download or clone and extract the project.
2. Start XAMPP/WAMP/LAMPP and Place the folder in htdocs or www folder.
3. Go to PhpMyadmin and create a new database called **laravel_api**.
4. Select the database and import SQL file named as laravel_api.
5. Rename **.env-example** file as **.env**.
6. Open cmd and navigate into the folder using cd command.
7. Type **composer install** to install dependencies.
8. Type **php artisan key:generate** on terminal.
9. Type php artisan serve in cmd.
10. Use **Postman** or **Browser extension** to test the API.

### API Routes
```php
http://127.0.0.1:8000/api/products      method = "GET"
http://127.0.0.1:8000/api/products/id   method = "GET"
http://127.0.0.1:8000/api/product       method = "POST"
http://127.0.0.1:8000/api/product       method = "PUT"
http://127.0.0.1:8000/api/product/id    method = "DELETE"
```
