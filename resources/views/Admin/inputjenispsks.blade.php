@extends('layouts.main')

@section('content')
<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span>- Input Profesi PSKS</h2>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>PSKS</a>
                      <span class="breadcrumb-item active">Input Profesi PSKS</span>
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
								<form action="{{Route('tambahjenispsks')}}" class="form-validate-jquery">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">Masukkan Jenis PSKS</legend>

                    <div class="form-group">
											<label>Kode Jenis:</label>
											<input type="text" class="form-control" placeholder="Masukkan Kode Jenis Psks" id="KodeJenisPSKS" name="KodeJenisPSKS">
										</div>

										<div class="form-group">
											<label>Profesi:<sup style="color:red; font-size:15px;">*</sup></label>
											<input type="text" class="form-control" required placeholder="Masukkan Profesi" id="ProfesiPSKS" name="ProfesiPSKS">
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
  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/notifications/pnotify.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_multiselect.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_select2.js"></script>
  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/validation/validate.min.js"></script>
@endsection