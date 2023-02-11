<!-- Navbar -->
<nav id="nav" style="z-index: 1000" class="navbar navbar-expand-lg shadow-0 glass">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="{{ asset('assets/images/logo.png') }}"
            height="50"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>

        <x-client.navbar.nav-links />

      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Avatar -->
        <div class="dropdown">
          <p
            class="dropdown-toggle d-flex align-items-center"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="flag flag-burma"></i>
        </p>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#"><i class="flag flag-burma"></i> Myanmar</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag flag-england"></i> English</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->