<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','date_of_incident','gender','place_of_recidence','complain','image','status'];

}
