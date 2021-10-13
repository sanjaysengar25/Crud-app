<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Device extends Model 
{
    protected $table = "devices";

    protected $fillable = ['name','email','password'];
}
