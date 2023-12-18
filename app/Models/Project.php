<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;
class Project extends Model
{
    use HasFactory;

    protected $connection = 'mongodb'; // Specify the MongoDB connection
    protected $collection = 'Project_info'; // Specify the MongoDB collection name
    protected $fillable = ['image', 'title', 'info', 'url'];

    protected $casts = [
        '_id' => 'string', // Cast the _id field to string
    ];
}
