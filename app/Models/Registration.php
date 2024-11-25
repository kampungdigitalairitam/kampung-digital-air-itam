<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    // Menambahkan kolom yang bisa diisi secara massal
    protected $fillable = [
        'email',
        'privacy_policy',
        'full_name',
        'district_origin',
        'current_residence',
        'full_address',
        'employment_status',
        'last_school',
        'major',
        'class_or_semester',
        'whatsapp_contact',
        'telegram_contact',
        'instagram',
        'motivation',
        'referral_source'
    ];
}
