# Employee APP

Employee App is an application for HR management.

# Features
  - One page application
  - DB file AJAX upload
  - Server Side Datatables including search, pagination and sorting
  - CRUD system for employees



This text you see here is *actually* written in Markdown! To get a feel for Markdown's syntax, type some text into the left window and watch the results in the right.

### Requirements
- PHP >= 7.1.3
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension
- Composer
- MySQL server

### Installation

Employee APP is created on Laravel Core and dependencies.

Download the repo, install the laravel core and dependencies and start the server.

```sh
$ git clone https://github.com/sofiaohanjanyan/employees.git
$ cd employees
$ composer install
```

### Configuration

Create an environment, generate a key, config your database connections

```sh
$ mv .env.example .env # for windows: ren .env.example .env
$ php artisan key:generate
```

Then config your database connections in .env file

Run the migration
```sh 
$ php artisan migrate
```

### Launch the application
```sh 
php artisan serve
# Laravel development server started: <http://127.0.0.1:8000>
```
