@extends('layouts.main')

@section('content')
@foreach($psks as $data)
@if(Auth::user()->NikPSKS == $data->NikPSKS)
<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span> Identitas PSKS</h2>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>PSKS</a>
                      <span class="breadcrumb-item active">Form Identitas PSKS</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>

                  <div class="header-elements d-none">
                    
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                <form action="{{Route('editidentitas',$data->NikPSKS)}}">
                    <div class="card">
                            <div class="card-header header-elements-inline">
                              <h5 class="card-title">Jenis Psks</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                  <label>Jenis PSKS</label>
                                    <select class="form-control select" data-fouc  name="my-select" id="my-select" value="{{$data->KodeJenisPSKS}}" name="KodeJenisPSKS" id="KodeJenisPSKS">
                                      <option value="00">--PILIH PSKS--</option>
                                      @foreach($jenispsks as $kode) 
                                        <option value="{{$kode->KodeJenisPSKS}}">{{$kode->ProfesiPSKS}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                            </div>  
                    </div> 
                </div>
              </div>
              
                <div class="row" >
                    <div class="col-md-12">

                      <!-- Basic legend -->
                      <div class="card"  id="otherFieldDiv">
                        <div class="card-header header-elements-inline">
                          <h5 class="card-title">Form Identitas</h5>
                        </div>

                        <div class="card-body">
                                      
                          
                            <fieldset>
                              <legend class="font-weight-semibold text-uppercase font-size-sm">Masukkan Data Diri</legend>

                              <div class="form-group">
                                <label>NIK:<sup style="color:red; font-size:15px;">*</sup></label>
                                <input type="text" class="form-control" placeholder="Masukkan Nomor NIK" value="{{$data->NikPSKS}}" name="NikPSKS" id="NikPSKS">
                              </div>
                              <div class="form-group">
                                <label>Nama:<sup style="color:red; font-size:15px;">*</sup></label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama" value="{{$data->NamaPSKS}}"  name="NamaPSKS" id="NamaPSKS">
                              </div>

                              <div class="form-group">
                                <label>No Hp:<sup style="color:red; font-size:15px;">*</sup></label>
                                <input type="text" class="form-control" placeholder="Masukkan No Hp" value="{{$data->NoHp}}"  name="NoHp" id="NoHp">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Email:<sup style="color:red; font-size:15px;">*</sup></label>
                                <input type="email" class="form-control" placeholder="Masukkan Email" value="{{$data->email}}"  name="email" id="email">
                              </div>

                              <div Xclass="form-group">
                                <label>Alamat:</label>
                                <textarea rows="5" cols="5" class="form-control" placeholder="Masukkan alamat" value="{{$data->Alamat}}"  name="Alamat" id="Alamat"></textarea>
                              </div>

                              <div class="form-group">
                                <label>Akun Bank:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Akun Bank " value="{{$data->AkunBank}}"  name="AkunBank" id="AkunBank">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Nama Bank:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Bank" value="{{$data->NamaBank}}"  name="NamaBank" id="NamaBank">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Nama Ibu Kandung:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Ibu" value="{{$data->NamaIbuKandung }}"  name="NamaIbuKandung " id="NamaIbuKandung ">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Pendidikan Tertinggi</label>
                                      <select class="form-control select" data-fouc value="{{$data->PendidikanTertinggi }}"  name="PendidikanTertinggi " id="PendidikanTertinggi " >
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="SMK">SMK</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                      </select>
                              </div>

                              <div class="form-group">
                                <label>Nama Pendidikan Tertinggi:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Pendidikan Tertinggi" value="{{$data->NamaPendidikanTertinggi}}"  name="NamaPendidikanTertinggi" id="NamaPendidikanTertinggi">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Akreditasi</label>
                                    <select class="form-control select" data-fouc value="{{$data->Akreditasi}}"  name="Akreditasi" id="Akreditasi">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                              </diV>

                              <div class="form-group">
                                <label>Nama Bupati/Walikota:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Bupati/Walikota" value="{{$data->NamaBupatiWalikota}}" name="NamaBupatiWalikota" id="NamaBupatiWalikota">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Nama Kadinsos:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Kadinsos" value="{{$data->NamaKadinsos}}" name="NamaKadinsos" id="NamaKadinsos">
                              </div>
                                                  
                            <div class="form-group">
                                <label>Eselon 4 Kadinsos</label>
                                    <select class="form-control select" data-fouc value="{{$data->Eselon4Kadinsos}}" name="Eselon4Kadinsos" id="Eselon4Kadinsos">
                                      <option value="A">A</option>
                                      <option value="B">B</option>
                                      <option value="C">C</option>
                                      <option value="D">D</option>
                                    </select>
                              </div>

                              <div class="form-group">
                                <label>Nama Staff Sehari Kadinsos:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Staff Sehari Kadinsos" value="{{$data->NamaStaffSehariKadinsos}}" name="NamaStaffSehariKadinsos" id="NamaStaffSehariKadinsos">
                            </div>
                                                  
                              <div class="form-group">
                                <label>No Hp Staff Kadinsos:</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Hp Staff Kadinsos" value="{{$data->StaffKadinsosNoHp}}" name="StaffKadinsosNoHp" id="StaffKadinsosNoHp">
                              </div>

                              <div class="form-group">
                                <label>Email Staff Kadinsos:</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email Staff Kadinsos" value="{{$data->StaffKadinsosEmail}}" name="StaffKadinsosEmail" id="StaffKadinsosEmail">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Nama Kepala Desa/Lurah:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Kepala Desa/Lurah" value="{{$data->NamaKepalaDesa}}" name="NamaKepalaDesa" id="NamaKepalaDesa">
                              </div>
                                                  
                              <div class="form-group">
                                <label>No Hp Kepala Desa/Lurah:</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Hp Kepala Desa/Lurah" value="{{$data->KepalaDesaNoHp }}" name="KepalaDesaNoHp " id="KepalaDesaNoHp ">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Email Kepala Desa/Lurah:</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email Kepala Desa/Lurah" value="{{$data->KepalaDesaEmail }}" name="KepalaDesaEmail " id="KepalaDesaEmail ">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Nama Ketua Rw:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Ketua Rw" value="{{$data->NamaKetuaRW}}" name="NamaKetuaRW" id="NamaKetuaRW">
                              </div>
                                                  
                              <div class="form-group">
                                <label>No Hp Ketua Rw:</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Hp Ketua Rw" value="{{$data->KetuaRWNoHp}}" name="KetuaRWNoHp" id="KetuaRWNoHp">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Email Ketua Rw:</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email Ketua Rw" value="{{$data->KetuaRWEmail}}" name="KetuaRWEmail" id="KetuaRWEmail">
                              </div>

                              <div class="form-group">
                                <label>Nama Ketua RT:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Ketua RT" value="{{$data->NamaKetuaRT}}" name="NamaKetuaRT" id="NamaKetuaRT">
                              </div>
                                                  
                              <div class="form-group">
                                <label>No Hp Ketua RT:</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Hp Ketua RT" value="{{$data->KetuaRTNoHp}}" name="KetuaRTNoHp" id="KetuaRTNoHp">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Email Ketua RT:</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email Ketua RT" value="{{$data->KetuaRTEmail}}" name="KetuaRTEmail" id="KetuaRTEmail">
                              </div>
                    
                              </fieldset>
                                              
                              <fieldset>
                              <legend class="font-weight-semibold text-uppercase font-size-sm">Rekan Kerja (Di wilayah Kerja)</legend>
                                                  
                              <div class="form-group">
                                <label>Nama Rekan:</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Rekan" value="{{$data->NamaRekan}}" name="NamaRekan" id="NamaRekan">
                              </div>

                              <div class="form-group">
                                <label>Jenis PSKS</label>
                                  <select class="form-control select" data-fouc value="{{$data->RekanJenisPSKS }}" name="RekanJenisPSKS " id="RekanJenisPSKS ">
                                        <option value="00">--PILIH PSKS--</option>
                                      @foreach($jenispsks as $kode) 
                                        <option value="{{$kode->KodeJenisPSKS}}">{{$kode->ProfesiPSKS}}</option>
                                      @endforeach
                                  </select>
                              </div>
                                                  
                              <div class="form-group">
                                <label>No Hp Rekan:</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Hp Rekan" value="{{$data->RekanNoHp }}" name="RekanNoHp " id="RekanNoHp ">
                              </div>
                                                  
                              <div class="form-group">
                                <label>Email Rekan:</label>
                                <input type="email" class="form-control" placeholder="Masukkan Email Rekan" value="{{$data->RekanEmail }}" name="RekanEmail " id="RekanEmail ">
                              </div> 

                            </fieldset>
                            <div class="text-right">
                              <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- /basic legend -->
                    </div>
                </div>

          </div>
@endif
@endforeach
@endsection

@section('js')    
    <script src="{{url('/')}}/template/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/notifications/pnotify.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_select2.js"></script>
    <script>
      $(document).ready(function(){
          $('#otherFieldDiv').hide();

          $('#my-select').change(function(){
              if($(this).val() == "01")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "02")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "03")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "04")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "05")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "06")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "07")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "08")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "09")
                  $('#otherFieldDiv').show();
              else if($(this).val() == "10")
                  $('#otherFieldDiv').show();
              else
                  $('#otherFieldDiv').hide();

          });
      });
    </script>
@endsection