<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;
    
   protected $table = 'mahasiswa';
    
   protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'jenis_kelamin', 'alamat', 'tanggal_lahir', 'agama_id'
    ];
    
    public function getNamaAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    
    public function getJenisAttribute($value)
    {
        if($value='l')
        {
            return "Laki-laki";
        }
        else
        {
            return "Perempuan";
        }
    }
    
   protected $dates = ['deleted_at'];
}
