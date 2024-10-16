<?php

namespace App\Models;

// Update the import to use the new package
use MongoDB\Laravel\Eloquent\Model;

class Address extends Model
{
    protected $connection = 'mongodb'; // Specify the MongoDB connection
    protected $collection = 'addresses'; // Specify the collection name

    protected $fillable = ['student_id', 'address', 'city', 'state', 'zip_code']; // Specify fillable fields
}
