# laravel-rest-api-with-front-end
Complete REST API with Laravel 8.x and Frontend integration Mini Project.
The latest version of one of the most popular PHP frameworks - to create a REST API CRUD web application with a MySQL database and Front end styles from scratch and step by step starting with the installation of Composer (PHP package manager) to implementing and serving your application.

## How to use
1. Clone the repository with following path `C:\xampp\htdocs` 
2. git clone `git clone https://github.com/hasmukh-dharajiya/laravel-rest-api-with-front-end.git`
3. Open `backend-Laravel-API` and `Copy .env.example file to .env`
4. Edit database credentials in .env file `DB_DATABASE=backendapi`
5. Run `composer install`
6. Run `php artisan key:generate`
7. Run `php artisan migrate`
8. Run `php artisan ser`
9. Open xampp and Start Apache Server 
10. Run **Index.php** in FrontEnd-Integration Folder `http://localhost/FrontEnd-Integration/`

You should see the list of Data, something like this:

![front_design_img](FrontEnd-Integration/img/front_design_img.gif)

## Feature
Key Feature of Project.
### 1. CRUD Operation Perform in Front end Project.

### 2. Pagination And Show Entries
![front_design_img](FrontEnd-Integration/img/pagination_img.gif)

## API EndPoints
User

- POST Employee All `http://localhost:8000/api/get/employee`
- POST Employee Single `http://localhost:8000/api/get/single/employee`
- POST Employee Add `http://localhost:8000/api/add/employee`
- POST Employee Update `http://localhost:8000/api/update/employee`
- POST Employee Delete `http://localhost:8000/api/delete/employee`