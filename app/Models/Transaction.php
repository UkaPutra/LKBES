<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'siswa_id',
        'setor_id',
        'tarik_id',
        'saldo'
        ];

        public function Siswa()
    {
        return $this->beLongsTo(Student::class, 'siswa_id');
    }

}
