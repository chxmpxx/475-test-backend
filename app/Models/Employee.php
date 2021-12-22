<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaterialList;

class Employee extends Model
{
    use HasFactory;

    public function materialLists(){
        return $this->hasMany(materialList::class);
    }
}
