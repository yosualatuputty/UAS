<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = "jadwal";

    protected $primaryKey = "ID";
    protected $fillable = [
        'ID',
        'Mata_Kuliah',
        'Hari',
        'Jam',
        'Ruang',
    ];

    public function materi() {
        return $this->hasOne(Materi::class,'ID', 'ID');
    }
}
