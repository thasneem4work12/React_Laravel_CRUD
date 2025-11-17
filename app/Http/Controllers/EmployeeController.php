<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

/**
 * EmployeeController handles all CRUD operations for employees
 * This controller manages Create, Read, Update, Delete operations
 */
class EmployeeController extends Controller
{
    /**
     * Display a list of all employees
     * GET /api/employees
     * Returns: JSON array of all employees
     */
    public function index() {
        return Employee::all();
    }

    /**
     * Create a new employee
     * POST /api/employees
     * Validates input data and creates new employee record
     * Returns: JSON of created employee
     */
    public function store(Request $request) {
        // Validate incoming request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female,Other',
            'age' => 'required|integer|min:18|max:100',
        ]);
        
        // Create and return new employee
        return Employee::create($validated);
    }

    /**
     * Update an existing employee
     * PUT /api/employees/{id}
     * Validates input and updates employee record
     * Returns: JSON of updated employee
     */
    public function update(Request $request, $id) {
        // Validate incoming request data (sometimes = only validate if field is present)
        $validated = $request->validate([
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'gender' => 'sometimes|required|string|in:Male,Female,Other',
            'age' => 'sometimes|required|integer|min:18|max:100',
        ]);
        
        // Find employee or throw 404 error if not found
        $emp = Employee::findOrFail($id);
        
        // Update employee with validated data
        $emp->update($validated);
        
        return $emp;
    }

    /**
     * Delete an employee
     * DELETE /api/employees/{id}
     * Removes employee from database
     * Returns: Number of deleted records (1 if successful)
     */
    public function destroy($id) {
        return Employee::destroy($id);
    }
}
