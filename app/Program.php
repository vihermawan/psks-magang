<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Program extends Model
{
    protected $table = 'm_program';
    //primary key = "id"
    protected $primaryKey = 'kode_program';
    
    //disable created_at and updated_at
    public $timestamps = false;

    public $incrementing = false;
    //fillable column
    protected $fillable = [
        'nm_program ',
        'kode_jenispm',
        'nama_program_lengkap',
        'alias '
    ];

}