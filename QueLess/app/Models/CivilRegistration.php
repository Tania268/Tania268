<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'age',
        'email_address',
        'phone_number',
        'id_or_passport',
        'proof_of_residence',
        'picture_or_photo',
        'witness_1',
        'witness_2',
        'proof_of_birth',
    ];

    /**
     * Get the user that owns the civil registration.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
