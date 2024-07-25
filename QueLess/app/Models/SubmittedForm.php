<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'age',
        'physical_address',
        'phone_number',
        'email_address',
        'file_name',
        'file_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
