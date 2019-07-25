<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Diklat extends Model
{
    protected $table = 'diklat';
    //primary key = "id"
    protected $primaryKey = 'KodeDiklat';
    
    //disable created_at and updated_at
    public $timestamps = false;

    public $incrementing = false;
    //fillable column
    protected $fillable = [
        'NikPSKS',
        'KodeDiklat',
        'NomorSertifikat',
        'JenisDiklat',
        'NamaDiklat',
        'TanggalMulai',
        'TanggalSelesai',
        'Penyelenggara',
        'gambar',
        'Tingkat'
    ];

}