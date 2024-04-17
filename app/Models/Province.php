<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = "provinces";
    protected $primaryKey = 'code';
    public $incrementing = false;
    public function districts()
    {
        return $this->hasMany(District::class, "province_code", "code");
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'province_id', 'code');
    }

}