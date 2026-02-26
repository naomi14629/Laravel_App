<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $table = 'tbl_musica';
    protected $primaryKey = 'mus_id';
    public $timestamps = false;

    protected $fillable = [
        'mus_titulo',
        'mus_artista',
        'mus_album',
        'mus_genero',
        'mus_duracion',
        'mus_creacion',
        'mus_estado'
    ];

    protected $dates = ['mus_creacion'];
}
