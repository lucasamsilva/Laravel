<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-teal elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link navbar-teal" style="color: #FFF;">
        <i class="fa fa-wrench" class="brand-image elevation-3" aria-hidden="true" style="padding-left: 20px"></i>
        <span class="brand-text font-weight-light"> Oficinet</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://scontent.faru1-1.fna.fbcdn.net/v/t1.0-9/52896900_2292284794170006_1733221266183159808_n.jpg?_nc_cat=110&_nc_sid=09cbfe&_nc_ohc=QcqdiAlzXhwAX9LJtEd&_nc_ht=scontent.faru1-1.fna&oh=af1b174a1219002316f861c7206a822c&oe=5F6D7B6D" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Lucas Andrei Moraes</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                <a href="{{ route('listar_clientes') }}" class="nav-link active">
                        <i class="nav-icon fa fa-users"></i>
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Clientes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
