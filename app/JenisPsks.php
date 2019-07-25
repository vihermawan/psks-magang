<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class JenisPsks extends Model
{
    protected $table = 'jenispsks';
    //primary key = "id"
    protected $primaryKey = 'KodeJenisPSKS';
    
    //disable created_at and updated_at
    public $timestamps = false;

    public $incrementing = false;
    //fillable column
    protected $fillable = [
      'NamaPSKS'
    ];

}