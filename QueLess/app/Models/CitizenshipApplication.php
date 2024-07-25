<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitizenshipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'age',
        'email',
        'physical_address',
        'phone_number',
        'class',
        'application_form',
        'finger_prints',
        'covering_letter',
        'residence_permit_or_birth_certificate',
        'non_swazi_pin',
        'covering_letter_from_husband',
        'husband_birth_certificate',
        'marriage_certificate',
        'husband_pin',
        'wife_pin',
        'birth_certificate',
        'parents_citizenship_status',
        'passport_number',
        'passport_photo_1',
        'passport_photo_2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
