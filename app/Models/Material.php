<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaterialList;

class Material extends Model
{
    protected $primaryKey = 'm_id';
    use HasFactory;

    public function materialLists(){
        return $this->hasMany(materialList::class);
    }
}
