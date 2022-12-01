<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Iluminate\Support\Carbon;

class Setor extends Model
{
    use HasFactory;
    protected $table = 'setors';
    protected $fillable = [
        'siswa_id',
        'setor',
        'tgl_setor'
    ];


    // public function getCreateAtAttribute()
    // {
    //     return Carbon::parse($this->attributes['tgl_setor'])->translatedFormat('Y-m-d');
    // }

    public function Siswa()
    {
        return $this->beLongsTo(Student::class, 'siswa_id');
    }
}
