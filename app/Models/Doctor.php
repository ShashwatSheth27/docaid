<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname','lastname','phone_no','gender','shift','start_time','end_time','department','address','email',
    ];

    public function appointment(){
        return $this->hasOne(Appointment::class, 'doctor_id','id');
    }
}
