<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'phone',

    ];
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function appointments(){
        return $this->belongsToMany(Appointment::class);
    }
}
