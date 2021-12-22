<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Material;
use App\Models\Order;

class MaterialList extends Model
{
    protected $primaryKey = 'taken_no';
    use HasFactory;

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function material(){
        return $this->belongsTo(Material::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
