
@section('content-menu')
 <!-- ESTA PARTE CONTIENE EL MENU DEL DASHBOARD  {{-- @yield('content-menu') --}}-->
 
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMINISTRACION</li>
        <!-- Optionally, you can add icons to the links{{-- {{ route('nationality.index') }} --}} -->
        <li class="active"><a href="#"><i class="fa fa-group"></i> <span>Usuarios</span></a></li>

        <li><a href="{{ route('nationality.index') }}"><i class="fa fa-vcard-o"></i> <span>Nacionalidad</span></a></li>
        <li><a href="{{ route('biophoto.index') }}"><i class="fa fa-camera-retro fa-lg"></i> <span>Biophoto</span></a></li>
        <li><a href="{{ route('people.index') }}"><i class="fa fa-user-circle-o"></i> <span>Trabajador</span></a></li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Registro de Asistencia</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Entrada</a></li>
            <li><a href="#">Salida</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

@endsection