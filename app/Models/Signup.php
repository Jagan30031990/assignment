<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;
    protected $table = 'mst_signup';
    protected $fillable = ['name','email','password','is_admin','google_id'];
}
