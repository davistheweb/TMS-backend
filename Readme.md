# Task Management System Backend

This repository contains the backend for the Task Management System (TMS). It provides APIs to manage tasks, users, and projects efficiently.

## Features
- User authentication and authorization
- CRUD operations for tasks.
- RESTful API design with MVC architecture

## Requirements
- PHP >= 7.4
- MySQL
- Composer

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/davistheweb/TMS-backend.git
    ```
2. Navigate to the project directory:
    ```bash
    cd TMS-backend
    ```
3. Install dependencies:
    ```bash
    composer install
    ```
4. Configure the `.env` file with your database credentials.

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Start the development server:
    ```bash
    php artisan serve
    ```

## API Documentation
Refer to the [API Documentation](docs/api.md) for detailed information on available endpoints.

## License
This project is licensed under the MIT License.

## Folder Structure 

```bash
.
|-- .env
|-- .env.example
|-- .gitignore
|-- Readme.md
|-- api
|   |-- Controllers
|   |-- Model
|   |   `-- config
|   |       `-- DBConnection.php
|   |-- Views
|   |   `-- sendMail.php
|   `-- index.php
|-- composer.json
|-- composer.lock
`-- index.php

6 directories, 10 files