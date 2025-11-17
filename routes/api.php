<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/**
 * API Routes for Employee Management
 * All routes are prefixed with /api automatically
 * Example: GET /api/employees
 */

// Get all employees
Route::get('/employees', [EmployeeController::class, 'index']);

// Create new employee
Route::post('/employees', [EmployeeController::class, 'store']);

// Update existing employee
Route::put('/employees/{id}', [EmployeeController::class, 'update']);

// Delete employee
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
