<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggapanKritik extends Model
{
    use HasFactory;

    protected $fillable = [
         'kritiks_id', 'tanggapan_kritik', 'users_id',
    ];


    public function kritik()
    {
    	return $this->hasOne(Kritik::class,'id', 'id');
    }
}
