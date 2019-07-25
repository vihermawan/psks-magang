@extends('layouts.main')
@section('content')
@foreach($c as $data)
@if($data->id == $_GET['id'])
            <div class="content">
              <div class="card page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                  <div class="page-title d-flex">
                    <h2><span class="font-weight-semibold mx-2">PSKS</span>Edit Hak Akses User</h2>
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
                    <h5 class="card-title">Tabel Hak Akses User</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="reload"></a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <form action="{{Route('updatehakakses', $data->id)}}">
                            <div class="form-group">
                                <select class="form-control select" data-fouc value="{{$data->id_role}}" name="id_role" id="id_role">
                                    <option value="00">--PILIH HAK AKSES--</option>
                                    @foreach($user_role as $kode) 
                                        <option value="{{$kode->id_role}}">{{$kode->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-right">
                              <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>  
                        </form>
                    </div>
                   
                </div>
				<!-- /bordered table -->
</div>
@endif		
@endforeach
@endsection

@section('js')    
	 <script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	 <script src="{{url('/')}}/template/global_assets/js/demo_pages/datatables_basic.js"></script>
   <script src="{{url('/')}}/template/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/notifications/pnotify.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_multiselect.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	  <script src="{{url('/')}}/template/global_assets/js/demo_pages/form_select2.js"></script>
@endsection