<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = "materi";
    protected $fillable = [
        'ID_Matkul',
        'Link_Materi',
        'Note',
        'Tingkat_Kesiapan',
    ];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class,'ID', 'ID');
    }

}
