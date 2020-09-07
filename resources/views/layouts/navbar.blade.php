  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-teal">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars" aria-hidden="true"></i></i></a>
      </li>
      <li class="nav-item">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">Sair</button>
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  