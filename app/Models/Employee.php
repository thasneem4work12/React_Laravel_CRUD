<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Employee Model
 * Represents an employee record in the database
 */
class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * These fields can be filled using create() or update() methods
     * Protects against mass-assignment vulnerabilities
     */
    protected $fillable = ['first_name', 'last_name', 'gender', 'age'];
}
