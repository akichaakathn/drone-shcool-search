<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    
    protected $guarded = array('');
    
    public static $rukes =array(
        'school' => 'required',
        'qualification' => 'required',
        'address' => 'required',
        'area' => 'required',
        );
}
