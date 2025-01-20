<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Felhasznalo extends Model
{
    protected $table = 'felhasznalok';
    protected $primaryKey = 'idfelhasznalo';
    protected $keyType = 'int';

    public $incrementing = true;

    protected $fillable = [
        'vezetek_nev',
        'uto_nev',
        'e_mail',
        'profil_idprofil',
        'cim_idcim'
    ];
    // Kapcsolat a Profil modellel
    public function profil():BelongsTo
    {
        return $this->belongsTo(Profil::class,'profil_idprofil','idprofil');
    }

    // Kapcsolat a Cím modellel
    public function cim():BelongsTo
    {
        return $this->belongsTo(Cim::class, 'cim_idcim','idcim');
    }
}
