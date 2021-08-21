<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone','address','sallery_id','photo','nid','joining_date'
    ];

    public function salary(){

        $this->hasOne(Salary::class);
    }
}
