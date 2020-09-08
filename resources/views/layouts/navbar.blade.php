  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-teal">
    <!-- Left navbar links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars" aria-hidden="true"></i></i></a>
      </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-danger"><i class="fa fa-sign-out mr-1" aria-hidden="true"></i>Sair</button>
    </form>
  </nav>
  <!-- /.navbar -->

  