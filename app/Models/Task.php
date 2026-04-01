<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Task extends Model
{
    protected $connection = 'mongodb'; // opsional tapi disarankan
    protected $collection = 'tasks';   // nama collection MongoDB
    protected $fillable = ['name', 'description'];
}
