    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

      <!-- Sidebar mobile toggler -->
      <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
          <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Main sidebar</span>
        <a href="#" class="sidebar-mobile-expand">
          <i class="icon-screen-full"></i>
          <i class="icon-screen-normal"></i>
        </a>
      </div>
      <!-- /sidebar mobile toggler -->


      <!-- Sidebar content -->
      <div class="sidebar-content">
        <div class="card card-sidebar-mobile">

          <!-- Header -->
          <div class="card-header header-elements-inline">
            <h6 class="card-title">Navigation</h6>
            <div class="header-elements">
              <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
          </div>
          
          <!-- User menu -->
          <div class="sidebar-user">
            <div class="card-body">
              <div class="media">
                <div class="mr-3">
                  <a href="#"><img src="{{url('/')}}/limitless/Template/global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                </div>

                <div class="media-body">
                  <div class="media-title font-weight-semibold">{{ Auth::user()->NamaPSKS }}</div>
                  <div class="font-size-xs opacity-50">
                    <i class="icon-pin font-size-sm"></i> &nbsp;{{ Auth::user()->NikPSKS }}
                  </div>
                </div>

                <div class="ml-3 align-self-center">
                  <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- /user menu -->

          <!-- Main navigation -->
              <div class="card-body p-0">
                <ul class="nav nav-sidebar" data-nav-type="accordion">
                  @if( Auth::user()->id_role == "1")
                  <!-- Main -->
                  <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">Dashboard</div> <i class="icon-menu" title="Main"></i></li>
                  <li class="nav-item ">
                    <a href="{{Route('dashboard')}}" class="nav-link"><i class="icon-copy"></i> <span>Dashboard</span></a>
                  </li>

                  <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">Manajemen</div> <i class="icon-menu" title="Main"></i></li>
                  <li class="nav-item ">
                    <a href="{{Route('tabelhakakses')}}" class="nav-link"><i class="icon-copy"></i> <span>Hak Akses User</span></a>
                  </li>
                  @endif
                  
                  @if( Auth::user()->id_role == "2" || Auth::user()->id_role == "3")
                  <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">Form</div> <i class="icon-menu" title="Main"></i></li>
                  <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Form PSKS</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                      @if( Auth::user()->id_role == "3")
                      <li class="nav-item"><a href="{{Route('inputidentitas')}}" class="nav-link"> Identitas PSKS</a></li>
                      <li class="nav-item"><a href="{{Route('inputkeluargaterdamping')}}" class="nav-link">Input Keluarga Terdamping</a></li>
                      <li class="nav-item"><a href="{{Route('inputdiklat')}}" class="nav-link">Input Diklat</a></li>
                      @endif
                      @if( Auth::user()->id_role == "2")
                      <li class="nav-item"><a href="{{Route('inputjenispsks')}}" class="nav-link">Input Profesi PSKS</a></li>
                      <li class="nav-item"><a href="{{Route('inputdatapsks')}}" class="nav-link">Input User PSKS</a></li>
                      @endif
                    </ul>
                  </li>
                 

                  <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tabel</div> <i class="icon-menu" title="Main"></i></li>
                  <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Tabel PSKS</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                    @if( Auth::user()->id_role == "3")
                      <li class="nav-item"><a href="{{Route('tabelkeluargaterdamping')}}" class="nav-link">Keluarga Terdamping</a></li>
                      <li class="nav-item"><a href="{{Route('tabeldiklat')}}" class="nav-link">Diklat</a></li>
                    @endif
                    @if( Auth::user()->id_role == "2")
                      <li class="nav-item"><a href="{{Route('tabeldatapsks')}}" class="nav-link">User PSKS</a></li>
                      <li class="nav-item"><a href="{{Route('tabeljenispsks')}}" class="nav-link">Profesi PSKS</a></li>
                      <li class="nav-item"><a href="{{Route('tabeladmindiklat')}}" class="nav-link">Diklat PSKS</a></li>
                      <li class="nav-item"><a href="{{Route('tabeladminkeluargaterdamping')}}" class="nav-link">Keluarga Terdamping PSKS</a></li>
                    @endif
                    </ul>
                  </li>
                  @endif
                  <!-- /main -->
                </ul>
              </div>
              <!-- /main navigation -->

        </div>
      </div>
      <!-- /sidebar content -->
      
    </div>
    <!-- /main sidebar -->


