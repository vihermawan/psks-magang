@extends('layouts.main')

@section('content')
@foreach($c as $data)
@if($data->KodeJenisPSKS == $_GET['KodeJenisPSKS'])
<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span>Edit Data Profesi PSKS</h2>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>PSKS</a>
                      <span class="breadcrumb-item active">Form Edit Profesi PSKS</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>

                  <div class="header-elements d-none">
                    
                  </div>
                </div>
              </div>
            <div class="row">
					<div class="col-md-12">

						<!-- Basic legend -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Form Profesi PSKS</h5>
							</div>

							<div class="card-body">
								<form action="{{Route('updatejenispsks', $data->KodeJenisPSKS)}}">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">Edit Profesi Psks</legend>

										<div class="form-group">
											<label>Profesi:</label>
											<input type="text" class="form-control" placeholder="Masukkan Nama" id="ProfesiPSKS" name="ProfesiPSKS" value="{{$data->ProfesiPSKS}}">
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
@endsection