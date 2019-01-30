## Installation Instructions

- Run git clone https://github.com/Jinearth9/internship.git
- Create a MySQL database for the project
    - mysql -u root -p
    - create database internship;
    - \q
- Copy .env.example to .env
- Configure your .env file
- Run composer update from the projects root folder.
- From the projects root folder run php artisan key:generate
- From the projects root folder run php artisan migrate
- From the projects root folder run php artisan db:seed
- Run php artisan serve
- Start server at http://localhost:8000
