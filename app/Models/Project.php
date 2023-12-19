<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Use the Eloquent model for MySQL

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'title', 'info', 'url'];

    // If your table uses a different name than "projects", you can specify it here
    // protected $table = 'your_table_name';

    // Assuming your primary key is not named "id", you can specify it here
    // protected $primaryKey = 'your_primary_key';

    // If you don't want timestamps, you can set this to false
    public $timestamps = true;

    // ... any additional configuration or methods you need
}
