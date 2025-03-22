<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    /** @use HasFactory<\Database\Factories\HistoryFactory> */
    use HasFactory;

    protected $guarded = [];

    // Relationship: A history belongs to a patient (user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: A history record is added by a doctor
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

}
