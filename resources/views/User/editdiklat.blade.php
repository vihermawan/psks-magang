@extends('layouts.main')

@section('content')
@foreach($c as $data)
@if($data->KodeDiklat == $_GET['KodeDiklat'])
<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span> - Edit Data Diklat PSKS</h2>
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
								<h5 class="card-title">Form Diklat</h5>
							</div>

							<div class="card-body">
								<form action="{{Route('updatediklat',$data->KodeDiklat)}}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">Masukkan Data Diklat</legend>

										<div class="form-group">
                      <label>Jenis Diklat</label>
                        <select class="form-control select" data-fouc id="JenisDiklat" name="JenisDiklat" value="{{$data->JenisDiklat}}">
                          <option value="kementrian">Kementrian</option>
                          <option value="lainnya">Lainnya</option>
                        </select>
										</div>

										<div class="form-group">
											<label>Nama Diklat:</label>
											<input type="text" class="form-control" placeholder="Masukkan Nama" id="NamaDiklat" name="NamaDiklat" value="{{$data->NamaDiklat}}">
										</div>

										<div class="form-group">
											<label>Nomor Sertifikat:</label>
											<input type="text" class="form-control" placeholder="Masukkan Nomor" id="NomorSertifikat" name="NomorSertifikat" value="{{$data->NomorSertifikat}}">
										</div>

                    <div class="form-group">
											<label>Gambar Sertifikat<sup style="color:red; font-size:15px;">*</sup></label>
											<input type="file" class="form-input-styled" data-fouc id="gambar" name="gambar">
											<span class="form-text text-muted">Format: png, jpg. Max file size 2Mb</span>
										</div>

                    <div class="form-group">
											<label>Tanggal Mulai:</label>
											<input type="date" class="form-control" id="TanggalMulai" name="TanggalMulai" value="{{$data->TanggalMulai}}">
                    </div>
                                        
                    <div class="form-group">
											<label>Tanggal Selesai:</label>
											<input type="date" class="form-control" id="TanggalSelesai" name="TanggalSelesai" value="{{$data->TanggalSelesai}}">
                    </div>

										<div class="form-group">
											<label>Penyelenggara:</label>
											<input type="text" class="form-control" placeholder="Masukkan Penyelenggara" id="Penyelenggara" name="Penyelenggara" value="{{$data->Penyelenggara}}">
										</div>
                                        
                    <div class="form-group">
                      <label>Tingkat</label>
                      <select class="form-control select" data-fouc id="Tingkat" name="Tingkat" value="{{$data->Tingkat}}">
                          <option value="pusat">Pusat</option>
                          <option value="provinsi">Provinsi</option>
                          <option value="kabupaten">Kabupaten/Kota</option>
                          <option value="kecamatan">Kecamatan</option>
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
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/demo_pages/form_validation.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/demo_pages/form_layouts.js"></script>
  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#showgambar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#gambar").change(function () {
      readURL(this);
    });
</script>
@endsection