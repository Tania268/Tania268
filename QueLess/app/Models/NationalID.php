<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalID extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'physical_address',
        'phone_number',
        'applicant_type',
        'age',
        'documents',
        'total_fee',
    ];

    protected $casts = [
        'documents' => 'array',
    ];
}
