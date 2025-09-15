# Copilot Instructions for LMS Laravel Project

## Project Overview
- This is a Laravel-based Learning Management System (LMS).
- Main app code is in `app/` (Controllers, Models, Helpers, Services, Traits).
- Views are in `resources/views/` (Blade templates, organized by feature).
- Routes are defined in `routes/` (`web.php`, `admin.php`, etc).
- Configuration is in `config/` (app, auth, services, etc).
- Database migrations, seeders, and factories are in `database/`.
- Public assets are in `public/`.

## Key Patterns & Conventions
- **Controllers**: HTTP logic in `app/Http/Controllers/`. Use resource controllers for CRUD.
- **Models**: Eloquent models in `app/Models/`. Relationships and scopes are defined here.
- **Helpers**: Global helper functions in `app/Helpers/global_helpers.php`.
- **Mail**: Custom mail classes in `app/Mail/`.
- **Blade Views**: Use `@extends`, `@section`, and `@include` for layout composition. Example: `resources/views/frontend/pages/midtrans-redirect.blade.php` handles payment redirection.
- **Routes**: Grouped by context (admin, auth, web). Use route names for redirects and links.
- **Config**: Sensitive keys (e.g., Midtrans) are stored in `config/services.php` and accessed via `config()`.
- **Testing**: Tests are in `tests/Feature/` and `tests/Unit/`. Uses Pest and PHPUnit.

## Workflows
- **Install dependencies**: `composer install` and `npm install`
- **Build assets**: `npm run build` (uses Vite, Tailwind, PostCSS)
- **Run dev server**: `php artisan serve`
- **Run tests**: `./vendor/bin/pest` or `php artisan test`
- **Migrate DB**: `php artisan migrate`
- **Seed DB**: `php artisan db:seed`

## Integrations
- **Midtrans**: Payment integration via Snap JS. Client key in `config/services.php`. Example usage in `midtrans-redirect.blade.php`.
- **Mail**: Custom mailers in `app/Mail/`, configured in `config/mail.php`.
- **3rd Party Packages**: See `composer.json` for list (e.g., barryvdh/laravel-debugbar, srmklive/paypal).

## Notable Files
- `app/Helpers/global_helpers.php`: Project-wide helper functions.
- `resources/views/frontend/pages/midtrans-redirect.blade.php`: Example of payment flow integration.
- `routes/web.php`, `routes/admin.php`: Main route definitions.
- `config/services.php`: API keys and service configs.

## Tips for AI Agents
- Always use config() for sensitive keys, never hardcode.
- Follow Laravel conventions for controllers, models, and views.
- Use route names for redirects/links (e.g., `route('payment.success')`).
- When adding new features, mirror existing structure for consistency.
- For new integrations, add config to `config/services.php` and document usage.
