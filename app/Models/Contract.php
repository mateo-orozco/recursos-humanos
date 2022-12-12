<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'salary',
        'start_date',
        'end_date',
        'type_contract_id',
    ];
    public function type_contract()
    {
        return $this->hasMany(TypeContract::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
