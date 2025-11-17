# React Laravel CRUD Application

A full-stack Employee Management System built with Laravel (backend) and React (frontend).

## Features

- ✅ Create new employees
- ✅ Read/View all employees
- ✅ Update existing employees
- ✅ Delete employees
- ✅ Form validation
- ✅ Responsive design
- ✅ CORS configured
- ✅ REST API

## Tech Stack

**Backend:**
- Laravel 12
- PHP 8.2+
- MySQL Database

**Frontend:**
- React 19
- Axios for API calls
- Modern CSS styling

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & npm
- MySQL (XAMPP recommended)
- Git

## Installation & Setup

### 1. Backend Setup (Laravel)

```bash
# Navigate to project root
cd c:\xampp\htdocs\React_laravel_crud

# Install PHP dependencies (if not already installed)
composer install

# Make sure .env file exists with correct database configuration
# Database should be: react_laravel_crud
# Username: root
# Password: (empty for XAMPP)

# Run migrations (if not already run)
php artisan migrate

# Start Laravel server
php artisan serve
```

The Laravel backend will run on `http://localhost:8000`

### 2. Frontend Setup (React)

Open a new terminal:

```bash
# Navigate to frontend directory
cd c:\xampp\htdocs\React_laravel_crud\employee-frontend

# Install dependencies (if not already installed)
npm install

# Start React development server
npm start
```

The React frontend will run on `http://localhost:3000`

## Running the Application

1. **Start MySQL** (via XAMPP control panel)

2. **Start Laravel Backend:**
   ```bash
   cd c:\xampp\htdocs\React_laravel_crud
   php artisan serve
   ```

3. **Start React Frontend** (in a new terminal):
   ```bash
   cd c:\xampp\htdocs\React_laravel_crud\employee-frontend
   npm start
   ```

4. **Access the application:**
   - Open your browser and navigate to `http://localhost:3000`

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/employees` | Get all employees |
| POST | `/api/employees` | Create new employee |
| PUT | `/api/employees/{id}` | Update employee |
| DELETE | `/api/employees/{id}` | Delete employee |

## Database Schema

**employees table:**
- `id` - Primary key
- `first_name` - VARCHAR(255)
- `last_name` - VARCHAR(255)
- `gender` - VARCHAR(255) (Male/Female/Other)
- `age` - INTEGER (18-100)
- `created_at` - Timestamp
- `updated_at` - Timestamp

## Project Structure

```
React_laravel_crud/
├── app/
│   ├── Http/Controllers/
│   │   └── EmployeeController.php
│   └── Models/
│       └── Employee.php
├── config/
│   └── cors.php
├── database/
│   └── migrations/
│       └── 2025_11_17_045405_create_employee_table.php
├── routes/
│   └── api.php
├── employee-frontend/
│   ├── src/
│   │   ├── App.js
│   │   ├── App.css
│   │   └── index.js
│   └── package.json
├── .env
├── composer.json
└── README.md
```

## Validation Rules

**Employee fields:**
- First Name: Required, string, max 255 characters
- Last Name: Required, string, max 255 characters
- Gender: Required, must be Male/Female/Other
- Age: Required, integer, between 18-100

## Troubleshooting

**Port already in use:**
- Laravel: Change port with `php artisan serve --port=8001`
- React: Set PORT in .env file or use `PORT=3001 npm start`

**Database connection error:**
- Make sure MySQL is running in XAMPP
- Verify database `react_laravel_crud` exists
- Check .env credentials

**CORS errors:**
- Verify CORS is properly configured in `config/cors.php`
- Check that Laravel backend is running on port 8000
- Ensure proxy is set in React package.json

## License

This project is open-source and available for educational purposes.

## Author

Created as a demonstration of full-stack CRUD operations with Laravel and React.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
