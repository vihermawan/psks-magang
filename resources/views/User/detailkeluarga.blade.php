@extends('layouts.main')
@section('content')
@foreach($data as $key)
            @if($key->IDARTBDT == $_GET['IDARTBDT'])
<!-- Page header -->
              <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">SIKS</span> - Detail Data KAT</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                      <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>

                  <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                      <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                      </a>

                      <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-gear mr-2"></i>
                          Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                          <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                          <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /page header -->

            
            <div class="content">
            <form action="">
                <div class="row">   
                    <div class="col-lg-6">
                        <div class="card my-5">
                            <center>
                                <div>
                                    <div class="card rounded-round bg-primary" style="width:100px; height:100px; margin-top:-10%;">
                                        <i class="icon-location3 icon-2x" style="padding-top: 35%"></i>
                                    </div>
                                    <p style="margin-top:20px; font-weight: bold;">BLOK I. PENGENALAN TEMPAT</p>
                                </div>
                            </center> 
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-5">PROVINSI</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" readonly value="{{$key->KDPROP}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-5">KABUPATEN</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" readonly value="{{$key->KDKAB}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-5">DESA</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" readonly value="{{$key->KDDESA}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-5">SLS/DUSUN</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" readonly value="SLS/DUSUN">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-5">ALAMAT</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" readonly value="ALAMAT">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="row">   
                                <div class="col-lg-12">
                                    <div class="card my-5">
                                    <center>
                                        <div>
                                            <div class="card rounded-round bg-info" style="width:100px; height:100px; margin-top:-10%;">
                                                <i class="icon-users4 icon-2x" style="padding-top: 35%"></i>
                                            </div>
                                            <p style="margin-top:20px;  font-weight: bold;">BLOK I. DATA KEPALA RUMAH TANGGA</p>
                                        </div>
                                    </center> 
                                    <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">ID BDT</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="IDBDT" readonly value="{{$key->IDARTBDT}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">JUMLAH ART</label>
                                                <div class="col-sm-5">
                                                <input type="text" class="form-control" id="Jumlah_ART"readonly value="Masukkan Jumlah..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">ORANG</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">JUMLAH KELUARGA</label>
                                                <div class="col-sm-4">
                                                <input type="text" class="form-control" id="Jumlah_Keluarga" readonly value="Masukkan Jumlah..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-3 col-form-label">KELUARGA</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">NIK</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id=" " value=" "readonly value="{{$key->NIK}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">NAMA KRT</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="Nama_KRT" readonly >
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">JENIS KELAMIN</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id=" " value=" "readonly value="{{$key->JnsKel}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">TANGGAL LAHIR</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id=" " value=" "readonly value="{{$key->TglLahir}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">UMUR</label>
                                                <div class="col-sm-5">
                                                <input type="text" class="form-control" id=" " value =" "readonly value="{{$key->Umur}}">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">TAHUN</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">NOMOR KK</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="NOKK" readonly value="{{$key->NoKK}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">STATUS PERKAWINAN</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id=" " value=" "readonly value="{{$key->Sta_Kawin}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">KEPEMILIKAN AKTE NIKAH/CERAI</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id=" " value=" "readonly value="{{$key->Ada_akta_nikah}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">TERCANTUM DLM KK RUTA?</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id=" " value=" "readonly value="{{$key->RUTA6}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">KEPEMILIKAN IDENTITAS</label>
                                                    <div class="col-sm-7">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                            <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                                                0. Tidak Memiliki
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                            <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                              1. Akte Lahir
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                            <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                               2. Kartu Pelajar
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                            <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                               4. KTP
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                            <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                               8. SIM
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">STATUS KEHAMILAN</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="status_kehamilan" value=" "readonly value="{{$key->Sta_hamil}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">JENIS KECACATAN</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="kode_cacat" readonly value="{{$key->Jenis_cacat}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">PENYAKIT KRONIS</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="penyakit_kronis" value=" "readonly value="{{$key->Penyakit_kronis}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">PARTISIPASI SEKOLAH</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="partisipasi_sekolah" value=" "readonly value="{{$key->Partisipasi_sekolah}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">JENJANG PENDIDIKAN</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="jenjang_pendidikan" value=" "readonly value="{{$key->   Pendidikan_tertinggi}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">KELAS TERTINGGI</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="kelas_tertinggi" value= " "readonly value="{{$key->   Kelas_tertinggi}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">IJAZAH YANG DIMILIKI</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="ijazah" value=" "readonly value="{{$key->   Ijazah_tertinggi}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">STATUS BEKERJA</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="status_bekerja" value=" "readonly value="{{$key->Sta_Bekerja}}">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">BIDANG USAHA PEKERJAAN</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="bidang_usaha" value=" "readonly value="Masukkan Bidang..">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-5 col-form-label">STATUS PEKERJAAN</label>
                                                <div class="col-sm-7">
                                                <input type="text" class="form-control" id="status_pekerjaan" value=" "readonly value="{{$key->Lapangan_usaha}}">
                                                </div>
                                            </div>    
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        
                                    </div>
                                </div>
                            </div>    
                        </div>         
                    </div>

                    @foreach($bdt_rt as $val)
                    @if($val->IDBDT == $key->IDBDT)
                    <div class="col-lg-6">
                        <div class="card my-5">
                                <center>
                                    <div>
                                        <div class="card rounded-round bg-success" style="width:100px; height:100px; margin-top:-10%;">
                                            <i class="icon-home2 icon-2x" style="padding-top: 35%"></i>
                                        </div>
                                        <p style="margin-top:20px;  font-weight: bold;">BLOK III. DATA KETERANGAN PERUMAHAN</p>
                                    </div>
                                </center> 
                            <div class="card-body">                          
                                
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">STATUS BANGUNAN TINGGAL</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="sta_bangunan" readonly value="{{$val->sta_bangunan}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">STATUS LAHAN TINGGAL</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="sta_lahan" value="{{$val->sta_lahan}}"readonly value="Masukkan Provinsi..">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">LUAS LANTAI</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" id="luas_lantai" readonly value="{{$val->luas_lantai}}">
                                    </div>
                                    <label for="inputProvinsi" class="col-sm-2 col-form-label">M2</label>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">JENIS LANTAI</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lantai" readonly value="{{$val->lantai}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">JENIS DINDING</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="dinding" readonly value="{{$val->dinding}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">KONDISI DINDING</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="kondisi_dinding" readonly value="{{$val->kondisi_dinding}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">JENIS ATAP</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="atap" readonly value="{{$val->atap}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="kondisi_atap" class="col-sm-6 col-form-label">KONDISI ATAP</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="kondisi_atap" readonly value="{{$val->kondisi_atap}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">JUMLAH KAMAR</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="jumlah_kamar" readonly value="{{$val->jumlah_kamar}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">SUMBER AIR MINUM</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="sumber_airminum" readonly value="{{$val->sumber_airminum}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">ID PELANGGAN PDAM</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nomor_meter_air" readonly value="{{$val->nomor_meter_air}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">SUMBER PENERANGAN</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="sumber_penerangan" readonly value="{{$val->sumber_penerangan}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">DAYA LISTRIK TERPASANG</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="daya" readonly value="{{$val->daya}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">ID PELANGGAN PLN</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nomor_pln" readonly value="{{$val->nomor_pln}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">SUMBER ENERGI MEMASAK</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="bb_masak" readonly value="{{$val->bb_masak}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">ID PELANGGAN GAS</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nomor_gas" readonly value="{{$val->nomor_gas}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">STATUS SANITASI BAB</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="fasbab" readonly value="{{$val->fasbab}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">JENIS KLOSET</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="kloset" readonly value="{{$val->kloset}}">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="inputProvinsi" class="col-sm-6 col-form-label">TPA TINJA</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="buang_tinja" readonly value="{{$val->buang_tinja}}">
                                    </div>
                                </div>  
                              
                            </div>
                        </div>
                        @endif
                        @endforeach
                        
                            <div class="row">   
                                <div class="col-lg-12">
                                    <div class="card my-5">
                                        <center>
                                            <div>
                                                <div class="card rounded-round bg-warning" style="width:100px; height:100px; margin-top:-10%;">
                                                    <i class="icon-piggy-bank icon-2x" style="padding-top: 35%"></i>
                                                </div>
                                                <p style="margin-top:20px;  font-weight: bold;">BLOK V. KEPEMILIKAN ASET</p>
                                            </div>
                                        </center> 
                                        <div class="card-body">                
                                            
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                                            Tabung Gas > 5.5kg
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Lemari Es/Kulkas
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            AC
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Pemanas Air(Water Heater)
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Telepon Rumah(PSTN)
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Televisi
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Perhiasan/Tabungan > 10gr
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Komputer/Laptop
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                           Sepeda
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                          Sepeda Motor
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Mobil
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Perahu
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Motor Tempel
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Perahu Motor
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Kapal
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">LAHAN</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="aset_tak_bergerak" readonly value="Masukkan Aset..">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">LUAS</label>
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control" id="luas_atb" value=" "readonly value="Masukkan Luas..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">M2</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">RUMAH DITEMPAT LAIN</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="rumah_lain" readonly value="Masukkan Rumah..">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">SAPI</label>
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control" id="jumlah_sapi" readonly value="Masukkan Jumlah..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">EKOR</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">KERBAU</label>
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control" id="jumlah_kerbau" readonly value="Masukkan Jumlah..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">EKOR</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">KUDA</label>
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control" id="jumlah_kuda" readonly value="Masukkan Jumlah..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">EKOR</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">BABI</label>
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control" id="jumlah_babi" readonly value="Masukkan Jumlah..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">EKOR</label>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="inputProvinsi" class="col-sm-4 col-form-label">KAMBING/DOMBA</label>
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control" id="jumlah_kambing" readonly value="Masukkan Jumlah..">
                                                </div>
                                                <label for="inputProvinsi" class="col-sm-2 col-form-label">EKOR</label>
                                            </div>  
                                       
                                    </div>
                                    </div>
                                </div>    
                            </div>         
                    </div> 
                </div>

                <div class="row d-flex justify-content-center my-5">   
                    <div class="col-lg-6 ">
                        <div class="card mb-4">
                                <center>
                                    <div>
                                        <div class="card rounded-round bg-primary" style="width:100px; height:100px; margin-top:-10%;">
                                            <i class="icon-credit-card icon-2x" style="padding-top: 35%"></i>
                                        </div>
                                        <p style="margin-top:20px;  font-weight: bold;">BLOK V. KESETARAAN PROGRAM</p>
                                    </div>
                                </center>     
                            <div class="card-body">                           
                             
                                        <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Bansos Pangan(BSP)
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Program Indonesia Pintar(PIP)
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Program Indonesia Sehat(PIS/PBI JKN)
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            BPJS Kesehatan Mandiri
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            BPJS Tenaga Kerja
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Asuransi Kesehatan Lainnya
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Program Keluarga Harapan
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" disabled>
                                                        <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">
                                                            Kredit Usaha Rakyat
                                                        </label>
                                                    </div>
                                                    <br>     
                                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                </div>

            </form>
           
            @endif
            @endforeach

@endsection