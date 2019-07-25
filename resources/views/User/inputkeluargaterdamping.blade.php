@extends('layouts.main')

@section('content')
<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span> Input Data Keluarga Terdamping</h2>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                  <div class="d-flex">
                    <div class="breadcrumb">
                      <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> PSKS</a>
                      <span class="breadcrumb-item active">Form Input Keluarga Terdamping</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>

                  <div class="header-elements d-none">
                    
                  </div>
                </div>
              </div>


			  <div class="row">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-header header-elements-inline">
                              <h5 class="card-title">Cari Data Keluarga</h5>
                            </div>
                            <div class="card-body">
							<form action="{{Route('inputkeluargaterdamping')}}" class="form-validate-jquery" method="GET">
								<fieldset class="mb-3 mt-3">
											<legend class="text-uppercase font-size-sm font-weight-bold">Masukan Alamat</legend>
											<div class="form-group row">
												<label class="col-form-label col-lg-2">Provinsi<sup style="color:red; font-size:15px;">*</sup></label>
												<div class="col-lg-10">
													<select class="form-control dynamic" data-dependent="NMKAB" name="NMPROP" id="NMPROP"> 
														<option >-- Provinsi --</option>
														@foreach($country_list as $provinsi) 
														<option value="{{$provinsi->NMPROP}}">{{$provinsi->NMPROP}}</option>
														@endforeach                           
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-lg-2">Kabupaten<sup style="color:red; font-size:15px;">*</sup></label>
												<div class="col-lg-10">
													<select class="form-control dynamic" data-dependent="NMKEC" name="NMKAB" id="NMKAB">	
														<option value="">-- Kabupaten --</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-lg-2">Kecamatan<sup style="color:red; font-size:15px;">*</sup></label>
												<div class="col-lg-10">
													<select class="form-control dynamic" data-dependent="NMDESA" name="NMKEC" id="NMKEC">
														<option value="" >-- Kecamatan --</option>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-lg-2">Desa<sup style="color:red; font-size:15px;">*</sup></label>
												<div class="col-lg-10">
													<select class="form-control  dynamic" name="NMDESA" id="NMDESA">
														<option value="" >-- Desa --</option>
													</select>
												</div>
											</div>
											{{ csrf_field() }}
										</fieldset>
										<div class="text-right">
											<button type="submit" class="btn btn-primary" onload="myFunction()">Cari<i class="icon-paperplane ml-2"></i></button>
										</div>
								</form>
                            </div>  
                    </div> 
                </div>
              </div>

			  <!-- <div id="loader"></div> -->

			  <div class="row" id="myDiv" class="animate-bottom" >
					<div class="col-md-12">
					@if($bdt != null)
						<!-- Basic legend -->
						<div class="card" >
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Data Keluarga</h5>
							</div>

							<div class="card-body">
								
							</div>
							<table class="table datatable-responsive-row-control table-bordered">
									<thead>
										<tr>
											<th></th>
											<th>No</th>
											<th>IDBDT</th>
											<th>NIK</th>
											<th>Nama Kepala Keluarga</th>
											<th>Alamat</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
									<?php $i = 1; ?>
									@foreach($bdt as $data)
										<tr>
											<td></td>
											<td>{{$i}}</td>
											<td>{{$data->IDBDT}}</td>
											<td>{{$data->NIK}}</td>
											@foreach($bdt_rt as $key)
												@if($key->IDBDT == $data->IDBDT)
												<td>{{$key->Nama_KRT}}</td>
												<td>{{$key->Alamat}}</td>
												@endif
											@endforeach
											<td>
											<div class="list-icons">
													<div class="dropdown">
														<a href="#" class="list-icons-item" data-toggle="dropdown">
															<i class="icon-menu9"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-center" style="padding-left:30px;">
														<a href="{{Route('prosesAll', $data->IDBDT)}}"><button type="button" class="btn btn-warning"  onclick="event.preventDefault(); document.getElementById('post').submit();">Pilih</button>
															<form id="post" action="{{Route('prosesAll', $data->IDBDT)}}" method="GET" style="display: none;"></form>
														</a>
														<a href="{{Route('detailkeluarga', 'IDARTBDT='.$data->IDARTBDT)}}" ><button type="button" class="btn btn-danger" >Detail</button></a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<?php $i++ ?>
									@endforeach
									</tbody>
								</table>
						</div>
						<!-- /basic legend -->
						@endif
                    </div>
                </div>


          </div>
@endsection

@section('js')
	<style>
	/* Center the loader */
	#loader {
	position: absolute;
	left: 50%;
	top: 50%;
	z-index: 1;
	width: 150px;
	height: 150px;
	margin: -75px 0 0 -75px;
	border: 16px solid #f3f3f3;
	border-radius: 50%;
	border-top: 16px solid #3498db;
	width: 120px;
	height: 120px;
	-webkit-animation: spin 2s linear infinite;
	animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
	0% { -webkit-transform: rotate(0deg); }
	100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
	}

	/* Add animation to "page content" */
	.animate-bottom {
	position: relative;
	-webkit-animation-name: animatebottom;
	-webkit-animation-duration: 1s;
	animation-name: animatebottom;
	animation-duration: 1s
	}

	@-webkit-keyframes animatebottom {
	from { bottom:-100px; opacity:0 } 
	to { bottom:0px; opacity:1 }
	}

	@keyframes animatebottom { 
	from{ bottom:-100px; opacity:0 } 
	to{ bottom:0; opacity:1 }
	}

	#myDiv {
	display: none;
	text-align: center;
	}
	</style>
	<script>
		var myVar;

		function myFunction() {
		myVar = setTimeout(showPage, 3000);
		}

		function showPage() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("myDiv").style.display = "block";
		}
	</script>  
	<script src="{{url('/')}}/template/global_assets/js/plugins/notifications/pnotify.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/demo_pages/form_select2.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>	
	<script src="{{url('/')}}/template/global_assets/js/demo_pages/datatables_responsive.js"></script>
	<script>
		$(document).ready(function(){

		$('.dynamic').change(function(){
		if($(this).val() != '')
		{
		var select = $(this).attr("id");
		var value = $(this).val();
		var dependent = $(this).data('dependent');
		var _token = $('input[name="_token"]').val();
		$.ajax({
			url:"{{ route('inputkeluargaterdamping.fetch') }}",
			method:"POST",
			data:{select:select, value:value, _token:_token, dependent:dependent},
			success:function(result)
			{
			$('#'+dependent).html(result);
			}

		})
		} 


		
		});

		$('#NMPROP').change(function(){
		$('#NMKAB').val('');
		$('#NMKEC').val('');
		$('#NMDESA').val('');
		});

		$('#NMKAB').change(function(){
		$('#NMKEC').val('');
		$('#NMDESA').val('');
		});

		$('#NMKEC').change(function(){
		$('#NMDESA').val('');
		});
		});
</script>
<script>
      $(document).ready(function(){
          $('#otherFieldDiv').hide();

          $('#my-select').change(function(){
              if($(this).val() == "01")
                  $('#otherFieldDiv').show();
              else
                  $('#otherFieldDiv').hide();

          });
      });
    </script>
@endsection