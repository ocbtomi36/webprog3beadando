<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cim extends Model
{
    protected $table = 'cimek';
    protected $primaryKey = 'idcim';
    protected $keyType = 'int';

    public $incrementing = true;

    protected $fillable = [
        'orszag',
        'varos',
        'utca',
        'hazszam'
    ];

    public function felhasznalo():BelongsTo
    {
        return $this->belongsTo(Felhasznalo::class,'cim_idcim','idcim');
    }

}
