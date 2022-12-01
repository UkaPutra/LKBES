<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarik extends Model
{
    use HasFactory;
    protected $table = 'tariks';
    protected $fillable = [
        'siswa_id',
        'tarik',
        'tgl_tarik'
    ];

    public function Siswa()
    {
        return $this->beLongsTo(Student::class, 'siswa_id');
    }
}
