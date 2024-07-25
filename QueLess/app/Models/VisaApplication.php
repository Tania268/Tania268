<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'age',
        'email_address',
        'phone_number',
        'completed_form',
        'police_certificate',
        'passport_photo_1',
        'passport_photo_2',
        'medical_references',
        'employer_motivation_letter',
        'qualification_copies',
        'position_proof',
    ];

    /**
     * Get the user that owns the visa application.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
