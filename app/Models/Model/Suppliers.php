<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
  
    protected $fillable = [
        'name', 'email', 'phone','address','shopname','photo'
    ];
}
