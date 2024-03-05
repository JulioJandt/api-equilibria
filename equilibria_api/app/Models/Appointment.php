<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {
    public function psychologist() {
        return $this->belongsTo(Psychologist::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
