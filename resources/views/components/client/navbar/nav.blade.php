<!-- Navbar -->
<nav id="nav" style="z-index: 1000;" class="navbar navbar-expand-lg pl-3 px-5">
    <!-- Container wrapper -->
    {{-- <div class="container-fluid"> --}}
    <!-- Toggle button -->

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse">
        <!-- Navbar brand -->
        <div class="logo">
            <a class="navbar-brand text-shadow-large text-gradient-1 mt-2 mt-lg-0" href="#">
                {{-- <img
              src="{{ asset('assets/images/logo2.svg') }}"
              height="50"
              alt="MDB Logo"
              loading="lazy"
            /> --}}
                Art Gallery
            </a>
        </div>

    </div>
    <x-client.navbar.nav-links />

    <button class="navbar-toggler float-end" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    {{-- <div class="d-flex align-items-center">  
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
      </div> --}}
    <!-- Right elements -->
    {{-- </div>  --}}
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
