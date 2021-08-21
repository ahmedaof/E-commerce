<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $protected = [];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
