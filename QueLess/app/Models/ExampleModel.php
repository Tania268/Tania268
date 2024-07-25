<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleModel extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'example_models';

    // The attributes that are mass assignable.
    protected $fillable = [
        'created_at',
        'updated_at',
    ];
}
