<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; // Update the import

class Student extends Model
{
    protected $connection = 'mongodb';  // Ensure the connection is set to MongoDB
    protected $collection = 'students';  // Specify the MongoDB collection

    protected $fillable = ['name', 'email', 'phone']; // Specify fillable fields
}
