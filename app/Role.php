<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'user_role';
    //primary key = "id"
    protected $primaryKey = 'id_role';

    public $timestamps = false;

    protected $fillable = [
        'role_name'        
    ];

}

?>