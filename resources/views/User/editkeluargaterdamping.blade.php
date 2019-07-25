@extends('layouts.main')

@section('content')
@foreach($c as $data)
@if($data->KodeKeluarga == $_GET['KodeKeluarga'])

<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span> - Edit Keluarga Terdamping</h2>
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
          </div>


            <div class="row">
					<div class="col-md-12">

						<!-- Basic legend -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Form Keluarga Terdamping</h5>
							</div>

							<div class="card-body">
								<form action="{{Route('updatekeluargaterdamping',$data->KodeKeluarga)}}">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">Masukkan Data Keluarga Terdamping</legend>

                    <div class="form-group">
											<label>NIK Keluarga:</label>
											<input type="text" class="form-control" placeholder="Masukkan Nomor NIK" name="NikKeluarga"  id="NikKeluarga" value="{{$data->NikKeluarga}}">
										</div>

										<div class="form-group">
											<label>Nomor KK:</label>
											<input type="text" class="form-control" placeholder="Masukkan Nomor KK" name="NomorKK" id="NomorKK" value="{{$data->NomorKK}}">
										</div>

										<div class="form-group">
											<label>Nama Kepala Keluarga:</label>
											<input type="text" class="form-control" placeholder="Masukkan Nama" name="NamaKepalaKeluarga" id="NamaKepalaKeluarga" value="{{$data->NamaKepalaKeluarga}}">
										</div>

                    <div class="form-group">
											<label>Alamat:</label>
											<textarea rows="5" cols="5" class="form-control" placeholder="Masukkan alamat" name="Alamat" id="Alamat" value="{{$data->Alamat}}"></textarea>
                    </div>
                                        
                      <div class="form-group">
                        <label>Program Bansos</label>
                        <select class="form-control select" data-fouc id="KodeProgramBansos" name="KodeProgramBansos" value="{{$data->KodeProgramBansos}}">
                          <option value="1">KUBE</option>
                          <option value="2">KUBE-JASA</option>
                          <option value="3">RS-RTLH</option>
                          <option value="4">SARLING</option>
                          <option value="5">E-WARONG</option>
                          <option value="6">PKH Non Tunai</option>
                          <option value="7">PKH</option>
                          <option value="8">ASPDB</option>
                          <option value="9">ASLUT</option>
                          <option value="10">UEP-FM</option>
                          <option value="11">PKSA</option>
                          <option value="12">JADUP</option>
                          <option value="13">IPWL-Luar Panti</option>
                          <option value="14">TASA</option>
                          <option value="15">HDN PKM</option>
                          <option value="16">BSPS-KAT</option>
                          <option value="17">PKH-REGULER</option>
                          <option value="18">PKH-AKSES</option>
                          <option value="19">PKH-DISABILITAS</option>
                          <option value="20 ">PKH Lansia</option>
                      </select>
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