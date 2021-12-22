<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'c_id';
    use HasFactory;

    public function order(){
        return $this->hasMany(Order::class);
    }
}
