<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
    'no_rekening',
    'nama_siswa',
        'kelas_id',
        'alamat',
        'jk',
        'no_hp',
        ];

        public function Kelas()
    {
        return $this->beLongsTo(Classroom::class, 'kelas_id');
    }
}
