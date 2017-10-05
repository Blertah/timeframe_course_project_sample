# timeframe_course_project_sample

> Implementation of a simple Web Application for Task Managment using [PHP Laravel Framework](https://github.com/laravel/framework) and [MySQL](https://github.com/mysql).

## Installation

``` bash

# clone the project
git clone https://github.com/enisto/todo_backend.git

# go to the folder application
cd todo_backend

# install dependencies using composer (if you dont have composer download and follow the instructions from https://getcomposer.org/download/)
composer install

# copy .env.example file to .env on root folder. 
cp .env.example .env

# configure needed enviroments variables
Open your .env file and change the database name (DB_DATABASE) to whatever you have (if you don't have, please create one), username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. 
For Xampp: By default, username is root and you can leave password field empty. 
For Lamp and Mamp: By default, username is root and password is also root.

# generate the application key
php artisan key:generate

# migrate the database structure
php artisan migrate

# start the application
php artisan serve
```