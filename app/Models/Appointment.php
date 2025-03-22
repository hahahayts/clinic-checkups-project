<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;

    protected $guarded = [];

    // Relationship: An appointment belongs to a patient (user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: An appointment can be assigned to a doctor
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

}
