@extends('layouts.main')

@section('content')
  @foreach($c as $key)
  @if($key->id == $_GET['id'])
  @foreach($p as $data)
  @if($key->NikPSKS == $data->NikPSKS )
  <div class="content">
                <div class="card page-header page-header-light">
                  <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                      <h2><span class="font-weight-semibold mx-2">PSKS</span> Edit PSKS</h2>
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

              <div class="row">
            <div class="col-md-12">

              <!-- Basic legend -->
              <div class="card">
                <div class="card-header header-elements-inline">
                  <h5 class="card-title">Form PSKS</h5>
                </div>

                <div class="card-body">
                  <form action="{{Route('updatepsks', $key->id)}}">
                    <fieldset>
                      <legend class="font-weight-semibold text-uppercase font-size-sm">Edit Data Psks</legend>

                      <div class="form-group">
                        <label>NIK:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor NIK" id="NikPSKS" name="NikPSKS" value="{{$data->NikPSKS}}">
                      </div>

                      <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama" id="NamaPSKS" name="NamaPSKS" value="{{$data->NamaPSKS}}">
                      </div>

                      <div class="form-group">
                        <label>No Hp:</label>
                        <input type="text" class="form-control" placeholder="Masukkan No Hp" id="NoHp" name="NoHp" value="{{$data->NoHp}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email" id="email" name="email" value="{{$data->email}}">
                      </div>

                      <div Xclass="form-group">
                        <label>Alamat:</label>
                        <textarea rows="5" cols="5" class="form-control" placeholder="Masukkan alamat" id="Alamat" name="Alamat" value="{{$data->Alamat}}"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Akun Bank:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Akun Bank "id="AkunBank" name="AkunBank" value="{{$data->AkunBank}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Nama Bank:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Bank" id="NamaBank" name="NamaBank" value="{{$data->NamaBank}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Ibu" id="NamaIbuKandung" name="NamaIbuKandung" value="{{$data->NamaIbuKandung}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Pendidikan Tertinggi</label>
                        <select class="form-control select" data-fouc id="PendidikanTertinggi" name="PendidikanTertinggi" value="{{$data->PendidikanTertinggi}}">
                          <option>SD</option>
                          <option>SMP</option>
                          <option>SMA</option>
                          <option>SMK</option>
                          <option>S1</option>
                          <option>S2</option>
                          <option>S3</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Nama Pendidikan Tertinggi:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Pendidikan Tertinggi" id="NamaPendidikanTertinggi" name="NamaPendidikanTertinggi" value="{{$data->NamaPendidikanTertinggi}}">
                    </div>
                                          
                      <div class="form-group">
                        <label>Akreditasi</label>
                        <select class="form-control select" data-fouc id="Akreditasi" name="Akreditasi" value="{{$data->Akreditasi}}">
                          <option>A</option>
                          <option>B</option>
                          <option>C</option>
                          <option>D</option>
                        </select>
                      </div>

                        <div class="form-group">
                        <label>Jenis PSKS</label>
                        <select class="form-control select" data-fouc id="KodeJenisPSKS" name="KodeJenisPSKS" value="{{$data->JenisPSKS}}">
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
                        <input type="text" class="form-control" placeholder="Masukkan Nama Bupati/Walikota" id="NamaBupatiWalikota" name="NamaBupatiWalikota" value="{{$data->NamaBupatiWalikota }}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Nama Kadinsos:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Kadinsos" id="NamaKadinsos" name="NamaKadinsos" value="{{$data->NamaKadinsos}}">
                      </div>
                                          
                      <div class="form-group">
                          <label>Eselon 4 Kadinsos</label>
                          <select class="form-control select" data-fouc id="Eselon4Kadinsos" name="Eselon4Kadinsos" value="{{$data->Eselon4Kadinsos}}">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label>Nama Staff Sehari Kadinsos:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Staff Sehari Kadinsos"  id="NamaStaffSehariKadinsos" name="NamaStaffSehariKadinsos" value="{{$data->NamaStaffSehariKadinsos}}" >
                      </div>
                                          
                      <div class="form-group">
                        <label>No Hp Staff Kadinsos:</label>
                        <input type="text" class="form-control" placeholder="Masukkan No Hp Staff Kadinsos" id="StaffKadinsosNoHp" name="StaffKadinsosNoHp" value="{{$data->StaffKadinsosNoHp}}">
                      </div>

                      <div class="form-group">
                        <label>Email Staff Kadinsos:</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Staff Kadinsos" id="StaffKadinsosEmail" name="StaffKadinsosEmail" value="{{$data->StaffKadinsosEmail}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Nama Kepala Desa/Lurah:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Kepala Desa/Lurah" id="NamaKepalaDesa" name="NamaKepalaDesa" value="{{$data->NamaKepalaDesa}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>No Hp Kepala Desa/Lurah:</label>
                        <input type="text" class="form-control" placeholder="Masukkan No Hp Kepala Desa/Lurah" id="KepalaDesaNoHp" name="KepalaDesaNoHp" value="{{$data->KepalaDesaNoHp}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Email Kepala Desa/Lurah:</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Kepala Desa/Lurah" id="KepalaDesaEmail" name="KepalaDesaEmail" value="{{$data->KepalaDesaEmail}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Nama Ketua Rw:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Ketua Rw" id="NamaKetuaRW" name="NamaKetuaRW" value="{{$data->NamaKetuaRW}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>No Hp Ketua Rw:</label>
                        <input type="text" class="form-control" placeholder="Masukkan No Hp Ketua Rw" id="KetuaRWNoHp" name="KetuaRWNoHp" value="{{$data->KetuaRWNoHp}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Email Ketua Rw:</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Ketua Rw" id="KetuaRWEmail" name="KetuaRWEmail" value="{{$data->KetuaRWEmail}}">
                      </div>

                      <div class="form-group">
                        <label>Nama Ketua RT:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Ketua RT" id="NamaKetuaRT" name="NamaKetuaRT" value="{{$data->NamaKetuaRT}}">
                      </div>
                                          
                    <div class="form-group">
                        <label>No Hp Ketua RT:</label>
                        <input type="text" class="form-control" placeholder="Masukkan No Hp Ketua RT" id="KetuaRTNoHp" name="KetuaRTNoHp" value="{{$data->KetuaRTNoHp}}">
                    </div>
                                          
                    <div class="form-group">
                        <label>Email Ketua RT:</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Ketua RT" id="KetuaRTEmail" name="KetuaRTEmail" value="{{$data->KetuaRTEmail}}">
                    </div>
            
                    </fieldset>
                    <fieldset>
                      <legend class="font-weight-semibold text-uppercase font-size-sm">Rekan Kerja (Di wilayah Kerja)</legend>
                                          
                      <div class="form-group">
                        <label>Nama Rekan:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Rekan" id="NamaRekan" name="NamaRekan" value="{{$data->NamaRekan}}">
                      </div>

                      <div class="form-group">
                        <label>Jenis PSKS</label>
                        <select class="form-control select" data-fouc id="KodeJenisPSKS" name="KodeJenisPSKS" value="{{$data->JenisPSKS}}">
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
                        <input type="text" class="form-control" placeholder="Masukkan No Hp Rekan" id="RekanNoHp" name="RekanNoHp" value="{{$data->RekanNoHp}}">
                      </div>
                                          
                      <div class="form-group">
                        <label>Email Rekan:</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Rekan" id="RekanEmail" name="RekanEmail" value="{{$data->RekanEmail}}">
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
@endsection