<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-teal elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link navbar-teal" style="color: #FFF;">
    <a href="{{ route('home') }}" style="color: #FFF"> 
            <i class="fa fa-wrench" class="brand-image elevation-3" aria-hidden="true"
                style="padding-left: 20px"></i>
            <span class="brand-text font-weight-light"> Oficinet</span></a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{  Auth::user()->profile_pic == '' ? Auth::user()->sexo == 'M' ? '/storage/img/avatar-masculino.jpg' : '/storage/img/avatar-feminino.jpg' : Auth::user()->profile_pic}}" class="img-circle elevation-2" alt="User Image">
            </div>
            @if(Auth::user())
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
            @endif
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                <a href="{{ route('listar_clientes') }}" class="nav-link {{ (request()->is('clientes*')) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-car" aria-hidden="true"></i>
                        <p>
                            Clientes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('listar_usuarios') }}" class="nav-link {{ (request()->is('usuarios*')) ? 'active' : '' }}">
                        <i class="nav-icon fa fa-desktop" aria-hidden="true"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
