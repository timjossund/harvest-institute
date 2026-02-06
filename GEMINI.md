# GEMINI Project Analysis: harvest-institute

## Project Overview

This project is a web application named "harvest-institute" built with the Laravel framework (version 12). Based on the file structure and naming conventions, it appears to be an e-learning or online course platform.

The application allows for the management of courses, lectures, tests, and questions. It includes user authentication and profile management, powered by Laravel Breeze.

**Key Technologies:**

*   **Backend:** PHP 8.2, Laravel 12
*   **Frontend:** Vite, Tailwind CSS, Alpine.js
*   **Database:** A relational database is expected, managed by Laravel's migration system.
*   **Testing:** Pest and PHPUnit are used for testing.

## Building and Running

### Initial Setup

To set up the project for the first time, run the following command from the project root:

```bash
composer run setup
```

This will:
1.  Install PHP dependencies with Composer.
2.  Create a `.env` file from the `.env.example` template.
3.  Generate an application key.
4.  Run database migrations.
5.  Install JavaScript dependencies with npm.
6.  Build the frontend assets with Vite.

### Development

To start the development server, run:

```bash
composer run dev
```

This command concurrently starts:
*   The PHP development server (`php artisan serve`).
*   The Laravel queue worker (`php artisan queue:listen`).
*   The Laravel log tailer (`php artisan pail`).
*   The Vite development server for frontend assets (`npm run dev`).

### Testing

To run the test suite, use the following command:

```bash
composer run test
```

This executes the tests using `php artisan test`.

## Development Conventions

*   **Routing:** Routes are defined in `routes/web.php` and `routes/auth.php`. The application follows RESTful routing conventions.
*   **Controllers:** Controllers are located in `app/Http/Controllers`. They handle the application logic and interact with models and views.
*   **Models:** Eloquent models are in `app/Models`. The relationships between models (e.g., Course -> Lecture -> Test -> Question) are reflected in the nested routes.
*   **Views:** Views are written in Blade templates and are located in `resources/views`. The application uses a component-based approach with Blade components in `resources/views/components` and `app/View/Components`.
*   **Frontend Assets:** Frontend assets are managed by Vite. The main JavaScript file is `resources/js/app.js`, and the main CSS file is `resources/css/app.css`.
*   **Styling:** The project uses Tailwind CSS for styling. The configuration is in `tailwind.config.js`.
*   **Authentication:** Authentication is handled by Laravel Breeze, providing a starting point for login, registration, and password reset functionality.
*   **Database Migrations:** Database schema is managed through migration files in `database/migrations`.
