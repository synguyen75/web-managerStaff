<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhomNhanVien extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_nhom',
        'cong_viec',
        'mo_ta'
    ];
    function thanhVien()
    {
        $this->hasMany(ThanhVien::class);
    }
}
