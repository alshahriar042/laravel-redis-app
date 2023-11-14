# Project Name

 Laravel Radis App
## Getting Started

These instructions will help you get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Make sure you have the following installed on your machine:

- PHP (version 8.1)
- Composer
- MySQL or another database of your choice
- Git

### Installing

1. Clone the repository:

    ```bash
    git clone https://github.com/alshahriar042/laravel-redis-app.git
    ```

2. Change into the project directory:

    ```bash
    cd laravel-redis-app
    ```

3. Install dependencies using Composer:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Update the `.env` file with your database credentials and any other configuration needed.

6. Generate an application key:

    ```bash
    php artisan key:generate
    ```

### Database Setup

Run the following command to migrate the database and seed it with sample data:

```bash
php artisan migrate:fresh --seed
```

### Test in Browser
Data 1st Time Load From Database.Than Always Load From Cache

```bash
 http://127.0.0.1:8000/api/blog/6
```
Before
```bash
{
"status_code": 201,
"message": "Fetched from database",
"data": {
"id": 7,
"title": "Test BLog",
"description": "This is a Blog Descriptions",
"created_at": "2023-11-14T06:15:50.000000Z",
"updated_at": "2023-11-14T06:15:50.000000Z"
}

```
After
```bash
{
"status_code": 201,
"message": "Fetched from redis",
"data": {
"id": 7,
"title": "Test BLog",
"description": "This is a Blog Descriptions",
"created_at": "2023-11-14T06:15:50.000000Z",
"updated_at": "2023-11-14T06:15:50.000000Z"
}

```
