<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantAnswer extends Model
{
    use HasFactory;
    protected $table = 'participant_answers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_mhs',
        'id_pertanyaan',
        'nim',
        'jawaban'
    ];

    public function pertanyaan(){
        return $this->belongsTo(Questions::class, 'id_pertanyaan', 'id');
    }

    public  function mahasiswa(){
        return $this->belongsTo(Participant::class, 'id_mhs', 'id');
    }
}
