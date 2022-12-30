<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'kritik', 'saran', 'status'];


    public function user() {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function tanggapan()
    {
    	return $this->hasOne(TanggapanKritik::class,'kritiks_id', 'id');
    }

}
