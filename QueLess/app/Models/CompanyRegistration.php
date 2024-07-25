<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'physical_address',
        'phone_number',
        'company_name',
        'application_letter',
        'reservation_status',
        'payment_status',
        'documents',
    ];

    protected $casts = [
        'documents' => 'array',
    ];
}
