<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class Hospital extends Model
{
    protected $table = "hospitals";
    protected $fillable = ['name', 'address', 'country_id', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];

    public function doctors(){
        return $this -> hasMany(Doctor::class, 'hospital_id', 'id');
    }
}
