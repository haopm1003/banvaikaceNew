<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = "districts";
    protected $primaryKey = 'code';
    public $incrementing = false;

    public function province()
    {
        return $this->belongsTo(Province::class, "province_code", "code");
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'district', 'code');
    }
    public function wards()
    {
        return $this->hasMany(Ward::class, 'district_code', 'code');
    }
}
