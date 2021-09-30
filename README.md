# Laravel ToDo App

This is a simple ToDo app.

This is built on Laravel Framework 8.62.0 This was built for demonstrate purpose.

## Installation

Clone the repository-

```
git clone https://github.com/aldyvictor/laravel-todo.git
```

Then cd into the folder with this command-

```
cd laravel-todo
```

Then do a composer install

```
composer install
```

Then create a environment file using this command-

```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `todos` and then do a database migration using this command-

```
php artisan migrate
```

php artisan key:generate

```

## Run server

Run server using this command-

```

php artisan serve

```

Then go to `http://localhost:8000` from your browser and see the app.

## Screenshot

![Landing Page](/public/img/ToDo-App-Laravel.png)
![Sign In Page](/screenshots/2.png)
![Registration Page](/screenshots/3.png)
![ToDo List Page](/screenshots/4.png)
![Create New ToDo Page](/screenshots/5.png)
![User Profile Page](/screenshots/6.png)
```
