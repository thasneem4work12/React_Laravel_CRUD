@echo off
echo Starting Laravel Backend Server...
echo.
echo Backend will run at http://localhost:8000
echo Press Ctrl+C to stop the server
echo.
cd /d "%~dp0"
php artisan serve
