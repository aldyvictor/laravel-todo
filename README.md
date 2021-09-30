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

At last generate application key, which will be used for password hashing, session and cookie encryption etc.

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
![Sign In Page](/public/img/ToDo-App-Laravel.png)
![Registration Page](/public/img/ToDo-App-Laravel.png)
![ToDo List Page](/public/img/ToDo-App-Laravel.png)
![Create New ToDo Page](/public/img/ToDo-App-Laravel.png)

```

```
