@extends('layouts.main')

@section('content')
<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span> Input Data PSKS</h2>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>PSKS</a>
                      <span class="breadcrumb-item active">Form Input User PSKS</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>

                  <div class="header-elements d-none">
                    
                </div>
              </div>


          <div class="row">
              <div class="col-md-12">

                <!-- Basic legend -->
                <div class="card">
                  <div class="card-header header-elements-inline">
                    <h5 class="card-title">Form Data PSKS</h5>
                  </div>

                  <div class="card-body">
                    <form action="{{Route('tambahpsks')}}"  class="form-validate-jquery">
                      <fieldset>
                        <div class="form-group">
                          <label>NIK:<sup style="color:red; font-size:15px;">*</sup></label>
                          <input type="text" class="form-control" required placeholder="Masukkan Nomor NIK"  name="NikPSKS" id="NikPSKS">
                        </div>

                        <div class="form-group">
                          <label>Password:<sup style="color:red; font-size:15px;">*</sup></label>
                          <input type="password" class="form-control" required placeholder="Masukkan Password"  id="password" name="password">
                        </div>

                        <div class="form-group">
                          <label>Nama:<sup style="color:red; font-size:15px;">*</sup></label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama" required id="NamaPSKS" name="NamaPSKS">
                        </div>

                        <div class="form-group">
                          <label>No Hp:<sup style="color:red; font-size:15px;">*</sup></label>
                          <input type="text" class="form-control" placeholder="Masukkan No Hp" required id="NoHp" name="NoHp">
                        </div>
                                            
                        <div class="form-group">
                          <label>Email:<sup style="color:red; font-size:15px;">*</sup></label>
                          <input type="email" class="form-control" placeholder="Masukkan Email" required id="email" name="email">
                        </div>

                        <div class="form-group">
                          <label>Alamat:<sup style="color:red; font-size:15px;">*</sup></label>
                          <textarea rows="5" cols="5" class="form-control" placeholder="Masukkan alamat" required id="Alamat" name="Alamat"></textarea>
                        </div>

                        <div class="form-group">
                          <label>Akun Bank:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Akun Bank "id="AkunBank" name="AkunBank">
                      </div>
                                            
                        <div class="form-group">
                          <label>Nama Bank:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Bank" id="NamaBank" name="NamaBank">
                        </div>
                                            
                        <div class="form-group">
                          <label>Nama Ibu Kandung:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Ibu" id="NamaIbuKandung" name="NamaIbuKandung">
                        </div>
                                            
                        <div class="form-group">
                          <label>Pendidikan Tertinggi</label>
                          <select class="form-control select" data-fouc id="PendidikanTertinggi" name="PendidikanTertinggi">
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
                          <input type="text" class="form-control" placeholder="Masukkan Nama Pendidikan Tertinggi" id="NamaPendidikanTertinggi" name="NamaPendidikanTertinggi">
                      </div>
                                            
                      <div class="form-group">
                        <label>Akreditasi</label>
                        <select class="form-control select" data-fouc id="Akreditasi" name="Akreditasi">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          </select>
                        </div>

                        <div class="form-group">
                            <label>Jenis PSKS</label>
                            <select class="form-control select" data-fouc id="KodeJenisPSKS" name="KodeJenisPSKS">
                              <option value="01">Pekerja Sosial Profesional</option>
                              <option value="02">Pekerja Sosial Masyarakat(PSM)</option>
                              <option value="03">Taruna Siaga Bencana(Tagana)</option>
                              <option value="04">Lembaha Kesejahteraan Sosial(LKS)</option>
                              <option value="05">Keluarga Pioner</option>
                              <option value="06">Wanita Pemimpin Kesejahteraan Sosial</option>
                              <option value="07">Penyuluh Sosial</option>
                              <option value="08">Tenaga Kesejahteraan Sosial Masyarakat</option>
                              <option value="09">Dunia Usaha</option>
                              <option value="10">Pendamping PKH</option>
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Nama Bupati/Walikota:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Bupati/Walikota" id="NamaBupatiWalikota" name="NamaBupatiWalikota">
                        </div>
                                            
                        <div class="form-group">
                          <label>Nama Kadinsos:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Kadinsos" id="NamaKadinsos" name="NamaKadinsos">
                        </div>
                                            
                        <div class="form-group">
                          <label>Eselon 4 Kadinsos</label>
                          <select class="form-control select" data-fouc id="Eselon4Kadinsos" name="Eselon4Kadinsos">
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Nama Staff Sehari Kadinsos:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Staff Sehari Kadinsos"  id="NamaStaffSehariKadinsos" name="NamaStaffSehariKadinsos" >
                        </div>
                                            
                        <div class="form-group">
                          <label>No Hp Staff Kadinsos:</label>
                          <input type="text" class="form-control" placeholder="Masukkan No Hp Staff Kadinsos" id="StaffKadinsosNoHp" name="StaffKadinsosNoHp">
                        </div>

                      <div class="form-group">
                          <label>Email Staff Kadinsos:</label>
                          <input type="email" class="form-control" placeholder="Masukkan Email Staff Kadinsos" id="StaffKadinsosEmail" name="StaffKadinsosEmail">
                      </div>
                                            
                      <div class="form-group">
                          <label>Nama Kepala Desa/Lurah:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Kepala Desa/Lurah" id="NamaKepalaDesa" name="NamaKepalaDesa">
                      </div>
                                            
                      <div class="form-group">
                          <label>No Hp Kepala Desa/Lurah:</label>
                          <input type="text" class="form-control" placeholder="Masukkan No Hp Kepala Desa/Lurah" id="KepalaDesaNoHp" name="KepalaDesaNoHp">
                      </div>
                                            
                      <div class="form-group">
                          <label>Email Kepala Desa/Lurah:</label>
                          <input type="email" class="form-control" placeholder="Masukkan Email Kepala Desa/Lurah" id="KepalaDesaEmail" name="KepalaDesaEmail">
                      </div>
                                            
                      <div class="form-group">
                          <label>Nama Ketua Rw:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Ketua Rw" id="NamaKetuaRW" name="NamaKetuaRW" >
                      </div>
                                            
                      <div class="form-group">
                          <label>No Hp Ketua Rw:</label>
                          <input type="text" class="form-control" placeholder="Masukkan No Hp Ketua Rw" id="KetuaRWNoHp" name="KetuaRWNoHp">
                      </div>
                                            
                      <div class="form-group">
                          <label>Email Ketua Rw:</label>
                          <input type="email" class="form-control" placeholder="Masukkan Email Ketua Rw" id="KetuaRWEmail" name="KetuaRWEmail">
                      </div>

                      <div class="form-group">
                          <label>Nama Ketua RT:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Ketua RT" id="NamaKetuaRT" name="NamaKetuaRT">
                      </div>
                                            
                      <div class="form-group">
                          <label>No Hp Ketua RT:</label>
                          <input type="text" class="form-control" placeholder="Masukkan No Hp Ketua RT" id="KetuaRTNoHp" name="KetuaRTNoHp">
                      </div>
                                            
                      <div class="form-group">
                          <label>Email Ketua RT:</label>
                          <input type="email" class="form-control" placeholder="Masukkan Email Ketua RT" id="KetuaRTEmail" name="KetuaRTEmail">
                      </div>
              
                      </fieldset>
                      <fieldset>
                        <legend class="font-weight-semibold text-uppercase font-size-sm">Rekan Kerja (Di wilayah Kerja)</legend>
                                            
                        <div class="form-group">
                          <label>Nama Rekan:</label>
                          <input type="text" class="form-control" placeholder="Masukkan Nama Rekan" id="NamaRekan" name="NamaRekan">
                        </div>

                        <div class="form-group">
                          <label>Jenis PSKS</label>
                          <select class="form-control select" data-fouc id="RekanJenisPSKS" name="RekanJenisPSKS">
                            <option value="01">Pekerja Sosial Profesional</option>
                            <option value="02">Pekerja Sosial Masyarakat(PSM)</option>
                            <option value="03">Taruna Siaga Bencana(Tagana)</option>
                            <option value="04">Lembaha Kesejahteraan Sosial(LKS)</option>
                            <option value="05">Keluarga Pioner</option>
                            <option value="06">Wanita Pemimpin Kesejahteraan Sosial</option>
                            <option value="07">Penyuluh Sosial</option>
                            <option value="08">Tenaga Kesejahteraan Sosial Masyarakat</option>
                            <option value="09">Dunia Usaha</option>
                            <option value="10">Pendamping PKH</option>
                          </select>
                        </div>
                                            
                      <div class="form-group">
                          <label>No Hp Rekan:</label>
                          <input type="text" class="form-control" placeholder="Masukkan No Hp Rekan" id="RekanNoHp" name="RekanNoHp">
                      </div>
                                            
                      <div class="form-group">
                          <label>Email Rekan:</label>
                          <input type="email" class="form-control" placeholder="Masukkan Email Rekan" id="RekanEmail" name="RekanEmail">
                      </div>
                            
                      </fieldset>
                      <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /basic legend -->

                    </div>
                </div>
            </div>
@endsection

@section('js')    
    <script src="{{url('/')}}/template/global_assets/js/plugins/forms/validation/validate.min.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/notifications/pnotify.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_select2.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_validation.js"></script>
   
@endsection