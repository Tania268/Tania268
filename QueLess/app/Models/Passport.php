<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'physical_address',
        'phone_number',
        'department',
        'documents',
    ];

    protected $casts = [
        'documents' => 'array',
    ];
}
