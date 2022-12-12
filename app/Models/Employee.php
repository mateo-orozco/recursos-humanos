<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'document',
        'birthdate',
        'phone',
        'address',
        'job',
        'area_id',
        'contract_id',
    ];
    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
    public function area()
    {
        return $this->hasMany(Area::class);
    }
}
