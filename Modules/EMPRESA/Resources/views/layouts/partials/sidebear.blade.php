<style>
  #tono{
    background-color: rgb(28, 117, 12);
    color: azure;
  }
  #color{
    color: azure;
  }
</style>

<!-- Main Sidebar Container -->
<aside id="tono"class="main-sidebar sidebar-dark-primary elevation-5">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="https://static.wixstatic.com/media/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png/v1/fill/w_387,h_441,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/30d63c_bb9cb5514b0546beafb671ec02cd2244~mv2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SENA EMPRESA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul id="tono" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li id="bt" class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Nosotros') }}" class="nav-link">
                <i class="fas fa-users"></i>
              <p>
                Nosotros
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Contactos') }}" class="nav-link">
                <i class="fas fa-address-book"></i>
              <p>
                Contactos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-users"></i>
              <p>Entrevistas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('vacant') }}" class="nav-link">
                        <i class="fas fa-user-secret"></i>
                      <p>Vacantes</p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="{{ route('Registros') }}" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                  <p>Registros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Postulados') }}" class="nav-link">
                    <i class="fas fa-address-card"></i>
                  <p>Postulados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-tags"></i>
              <p>Prestamos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('NuevoPrestamo') }}" class="nav-link">
                    <i class="fas fa-external-link-alt"></i>
                  <p>Nuevo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('PrestamosRegistrados') }}" class="nav-link">
                    <i class="fas fa-poll"></i>
                  <p>Registrados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-fingerprint"></i>
              <p>Asistencias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('AgregarAsistencia') }}" class="nav-link">
                    <i class="fas fa-puzzle-piece"></i>
                  <p>Agregar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Asistencias') }}" class="nav-link">
                    <i class="fas fa-dragon"></i>
                  <p>Registros</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
