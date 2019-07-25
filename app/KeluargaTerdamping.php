<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class KeluargaTerdamping extends Model
{
    protected $table = 'keluarga_terdamping';
    //primary key = "id"
    protected $primaryKey = 'KodeKeluarga';
    
    //disable created_at and updated_at
    public $timestamps = false;

    public $incrementing = false;
    //fillable column
    protected $fillable = [
        'NikPSKS',
        'NamaKepalaKeluarga',
        'NomorSertifikat',
        'NikKeluarga ',
        'Alamat ',
        'KodeProgramBansos',
        'KodePengurus ',
        'KodeARTBDT '
    ];

}