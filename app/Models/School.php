<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    
    public static $rules =array(
        'school' => 'required',
        'qualification' => 'required',
        'address' => 'required',
        'area' => 'required',
        );
    
    protected $guarded = [];
    
    public function histories()
    {
        return $this->hasMany('App/Models/History');
    }
}
