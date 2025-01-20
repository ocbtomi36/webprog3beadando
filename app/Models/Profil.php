<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profil extends Model
{
    protected $table = 'profilok';
    protected $primaryKey = 'idprofil';
    protected $keyType = 'int';

    public $incrementing = true;

    protected $fillable = [
        'telefonszam'
    ];

    public function felhasznalo():BelongsTo
    {
        return $this->belongsTo(Felhasznalo::class,'profil_idprofil','idprofil');
    }

}
