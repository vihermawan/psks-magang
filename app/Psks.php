<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Psks extends Model
{
    protected $table = 'psks';
    //primary key = "id"
    protected $primaryKey = 'NikPSKS';

    public $timestamps = false;

    protected $fillable = [
        'NikPSKS',
        'NamaPSKS',
        'NoHp',
        'Email',
        'Alamat',
        'AkunBank',
        'NamaBank',
        'NamaIbuKandung',
        'PendidikanTertinggi',
        'NamaPendidikanTertinggi',
        'Akreditasi',
        'JenisPSKS',
        'NamaBupatiWalikota',
        'NamaKadinsos',
        'Eselon4Kadinsos',
        'NamaStaffSehariKadinsos',
        'StaffKadinsosNoHp',
        'StaffKadinsosEmail',
        'NamaKepalaDesa',
        'KepalaDesaNoHp',
        'KepalaDesaEmail',
        'NamaKetuaRW',
        'KetuaRWNoHp',
        'KetuaRWEmail',
        'NamaKetuaRT',
        'KetuaRTNoHp',
        'KetuaRTEmail',
        'NamaRekan',
        'RekanNoHp',
        'RekanEmail',
        'RekanJenisPSKS'
    ];

}

?>