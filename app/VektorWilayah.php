<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VektorWilayah extends Model
{
    protected $table = 'vektorwilayah';

    protected $primaryKey = 'KDPROP';

    public $timestamps = false;

    protected $fillable = [
    'Vector1',
    'Vector2',
    'Vector3',
    'Vector4',
    'KDGabungan2',
    'KDGabungan3',
    'KDGabungan4',
    'KDPROP',
    'KDKAB',
    'KDKEC',
    'KDDESA',
    'NMPROP',
    'NMPROP',
    'NMKAB',
    'NMKEC',
    'NMDESA',
    'Lat_Prop',
    'Long_Prop',
    'Lat_Kab',
    'Long_Kab',
    'Lat_Kec',
    'Long_Kec',
    'Lat_Desa',
    'Long_Desa',
    'TABLERT',
    'TABLEART',
    'TABLERT_NEW',
    'TABLEART_NEW',
    'kuota',
    'sumber_dari'
    ];
}
