# Quick Start Guide

## How to Run the Application

### Option 1: Using Batch Files (Easiest)

1. **Make sure MySQL is running** (Start XAMPP and start MySQL)

2. **Start Backend:**
   - Double-click `start-backend.bat` in the project root folder
   - Wait for "Laravel development server started on http://127.0.0.1:8000"

3. **Start Frontend:**
   - Open the `employee-frontend` folder
   - Double-click `start-frontend.bat`
   - Your browser will automatically open to http://localhost:3000

### Option 2: Using Terminal Commands

**Terminal 1 - Backend:**
```bash
cd c:\xampp\htdocs\React_laravel_crud
php artisan serve
```

**Terminal 2 - Frontend:**
```bash
cd c:\xampp\htdocs\React_laravel_crud\employee-frontend
npm start
```

## First Time Setup

If this is your first time running the application:

```bash
# 1. Make sure MySQL is running and database exists
# Create database 'react_laravel_crud' in phpMyAdmin

# 2. Install backend dependencies
cd c:\xampp\htdocs\React_laravel_crud
composer install

# 3. Run migrations
php artisan migrate

# 4. Install frontend dependencies
cd employee-frontend
npm install
```

## Testing the Application

1. Open http://localhost:3000 in your browser
2. Try adding a new employee:
   - First Name: John
   - Last Name: Doe
   - Gender: Male
   - Age: 25
3. Click "Add Employee" - it should appear in the table below
4. Try editing the employee by clicking "Edit"
5. Try deleting the employee by clicking "Delete"

## Troubleshooting

**Backend won't start:**
- Make sure XAMPP MySQL is running
- Check if port 8000 is available
- Verify .env database credentials

**Frontend won't start:**
- Make sure backend is running first
- Check if port 3000 is available
- Try: `npm install` again

**Can't connect to API:**
- Verify backend is running on http://localhost:8000
- Check browser console for CORS errors
- Clear browser cache and try again

## Features Implemented

✅ **Create** - Add new employees with validation
✅ **Read** - View all employees in a table
✅ **Update** - Edit existing employee information
✅ **Delete** - Remove employees with confirmation
✅ **Validation** - Form validation on both frontend and backend
✅ **Error Handling** - User-friendly error messages
✅ **Responsive Design** - Works on mobile and desktop
✅ **Modern UI** - Clean gradient design with smooth animations

## Next Steps

- Add search/filter functionality
- Add pagination for large datasets
- Add sorting by columns
- Add employee photo upload
- Add department/role fields
- Add authentication/login

Enjoy using the Employee Management System!
