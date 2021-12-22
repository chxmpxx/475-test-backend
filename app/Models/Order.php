<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'o_id';
    protected $keyType = 'string';
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function materialLists(){
        return $this->hasMany(materialList::class);
    }
}
