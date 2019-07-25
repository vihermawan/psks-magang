@extends('layouts.main')
@section('content')

<div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span> -Tabel Diklat PSKS</h2>
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


			<!-- Bordered table -->
			<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Tabel Diklat</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="reload"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
					@if ($message = Session::get('success'))
						<script type="text/javascript">
							$(document).ready(function() {
								$('#modal_theme_primary').modal();
							});
						</script>
						<div id="modal_theme_primary" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary">
										<h6 class="modal-title">Pemberitahuan</h6>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<div class="modal-body">
										<h6 class="font-weight-semibold">{{ $message }}</h6>
									</div>

								</div>
							</div>
						</div>
					@endif
					@if ($message = Session::get('delete'))
						<script type="text/javascript">
							$(document).ready(function() {
								$('#modal_theme_danger').modal();
							});
						</script>
						<div id="modal_theme_danger" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-danger">
										<h6 class="modal-title">Pemberitahuan</h6>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<div class="modal-body">
										<h6 class="font-weight-semibold">{{ $message }}</h6>
									</div>

								</div>
							</div>
						</div>
					@endif
					@if ($message = Session::get('edit'))
						<script type="text/javascript">
							$(document).ready(function() {
								$('#modal_theme_warning').modal();
							});
						</script>
						<div id="modal_theme_warning" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-warning">
										<h6 class="modal-title">Pemberitahuan</h6>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<div class="modal-body">
										<h6 class="font-weight-semibold">{{ $message }}</h6>
									</div>

								</div>
							</div>
						</div>
					@endif
						
					</div>

					<table class="table datatable-responsive-row-control table-bordered">
						<thead>
							<tr>	
								<th></th>
                                <th>No</th>
                                <th>Jenis Diklat</th>
                                <th>Nama Diklat</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
								<th>Gambar Sertifikat</th>
                                <th>Penyelenggara</th>
                                <th>Tingkat </th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
						<?php $i = 1; ?>
                  		@foreach($diklat as $data)
								<tr>
								<td></td>
								<td>{{$i}}</td>
								<td>{{$data->JenisDiklat}}</td>
								<td>{{$data->NamaDiklat}}</td>
								<td>{{$data->TanggalMulai}}</td>
								<td>{{$data->TanggalSelesai}}</td>
								<td> <img src="{{ asset('image/'.$data->gambar)  }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" /></td>
								<td>{{$data->Penyelenggara}}</td>
								<td>{{$data->Tingkat}}</td>
								<td>
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-center" style="padding-left:30px;">
											<a href="{{route('editdiklat', 'KodeDiklat='.$data->KodeDiklat) }}" > <button action type="button" class="btn btn-warning">Edit</button></a>
											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_theme_danger{{$data->KodeDiklat}}">Hapus</button>
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

				
				<!-- /bordered table -->

				<!-- Danger modal -->
				@foreach($diklat as $data)
				<div id="modal_theme_danger{{$data->KodeDiklat}}" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-danger">
								<h4 class="modal-title">Delete</h4>
							</div>

							<div class="modal-body">
								Anda yakin ingin menghapus data ini?
							</div>
							<form action="{{Route('hapusDiklat', $data->KodeDiklat)}}" method="POST">
                            {{csrf_field()}}

                            <input type="hidden" name="_method" value="GET">

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="submit" class="btn bg-danger">Yes</button>
							</div>
							</form>
                        
						</div>
					</div>
				</div>
				@endforeach
				<!-- /default modal -->


          </div>

			

				
@endsection

@section('js')    
	<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>	
	<script src="{{url('/')}}/template/global_assets/js/demo_pages/datatables_responsive.js"></script>
@endsection