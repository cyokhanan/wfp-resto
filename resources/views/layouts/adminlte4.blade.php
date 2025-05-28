<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Rivi Resto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Rivi Resto" />
    <meta name="author" content="Rivi Team" />
    <meta name="description" content="Admin panel Rivi Resto menggunakan AdminLTE 4." />

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      crossorigin="anonymous"
    />

    <!-- OverlayScrollbars -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('adminlte4/css/adminlte.css') }}" />
  </head>

  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <!-- Header -->
      <nav class="app-header navbar navbar-expand bg-body" style="height: 91px;">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a id="hamburgerBtn" class="nav-link" href="#" role="button" aria-label="Toggle sidebar">
                <i class="bi bi-list" style="font-size: 1.5rem;"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </nav>

      <!-- Sidebar -->
      <aside id="sidebarFloating" class="app-sidebar bg-body-secondary shadow"
        style="background-color: #2c313c; position: fixed; top: 0; left: 0; height: 100vh; width: 280px; z-index: 1050; transform: translateX(-100%); transition: transform 0.3s ease;">
        <div class="sidebar-brand"
          style="height: 80px; background-color: #2c313c; display: flex; align-items: center; justify-content: space-between; padding: 0 1rem;">
          <a href="/" class="brand-link d-flex align-items-center" style="gap: 0.5rem;">
            <img src="{{ asset('adminlte4/img/logo.png') }}" alt="Logo" style="height: 70px;" />
            <span class="brand-text fw-light text-white">Rivi Food</span>
          </a>
          <button id="closeSidebarBtn" class="btn btn-sm btn-dark" aria-label="Close sidebar"
            style="font-weight: 700; font-size: 1.5rem;">&times;</button>
        </div>
        <div class="sidebar-wrapper" style="background-color: #2c313c; padding-top: 1rem;">
          <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" role="menu" data-accordion="false">
              <li
                class="nav-item {{ Request::is('foods', 'listcategories', 'customers', 'orders') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link text-white d-flex justify-content-between align-items-center px-3 {{ Request::is('foods', 'listcategories', 'customers', 'orders') ? 'active' : '' }}">
                  <span><i class="bi bi-basket3-fill me-2"></i> Menu</span>
                </a>
                <ul class="nav nav-treeview ps-4">
                  <li class="nav-item">
                    <a href="{{ url('/foods') }}"
                      class="nav-link text-white {{ Request::is('foods') ? 'active' : '' }}">
                      <i class="nav-icon bi bi-circle"></i> <p>Daftar Makanan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/listcategories') }}"
                      class="nav-link text-white {{ Request::is('listcategories') ? 'active' : '' }}">
                      <i class="nav-icon bi bi-circle"></i> <p>Daftar Kategori</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/customers') }}"
                      class="nav-link text-white {{ Request::is('customers') ? 'active' : '' }}">
                      <i class="nav-icon bi bi-circle"></i> <p>Daftar Pelanggan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/orders') }}"
                      class="nav-link text-white {{ Request::is('orders') ? 'active' : '' }}">
                      <i class="nav-icon bi bi-circle"></i> <p>Daftar Order</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <!-- Overlay -->
      <div id="overlay"
        style="position: fixed; inset: 0; background: rgba(0,0,0,0.5); opacity: 0; visibility: hidden; transition: opacity 0.3s ease; z-index: 1040;">
      </div>

      <!-- Main Content -->
      <main class="app-main">
        @yield('content')
      </main>

      <!-- Footer -->
      <footer class="app-footer">
        <strong>
          Copyright &copy; 2025
          <a href="https://github.com/Azura1000/wfp-resto" class="text-decoration-none">Rivi Food</a>.
        </strong>
        All rights reserved.
      </footer>
    </div>

    <!-- Scripts -->
    <script>
      const hamburgerBtn = document.getElementById('hamburgerBtn');
      const sidebarFloating = document.getElementById('sidebarFloating');
      const closeSidebarBtn = document.getElementById('closeSidebarBtn');
      const overlay = document.getElementById('overlay');

      function openSidebar() {
        sidebarFloating.style.transform = 'translateX(0)';
        overlay.style.opacity = '1';
        overlay.style.visibility = 'visible';
        hamburgerBtn.style.display = 'none';
      }

      function closeSidebar() {
        sidebarFloating.style.transform = 'translateX(-100%)';
        overlay.style.opacity = '0';
        overlay.style.visibility = 'hidden';
        hamburgerBtn.style.display = 'block';
      }

      hamburgerBtn.addEventListener('click', e => {
        e.preventDefault();
        openSidebar();
      });

      closeSidebarBtn.addEventListener('click', e => {
        e.preventDefault();
        closeSidebar();
      });

      overlay.addEventListener('click', () => {
        closeSidebar();
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous">
    </script>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const menuToggles = document.querySelectorAll('.sidebar-menu .nav-link');

        menuToggles.forEach(link => {
          link.addEventListener('click', function (e) {
            const parent = this.closest('.nav-item');
            const subMenu = parent.querySelector('.nav-treeview');

            // Jika tidak ada submenu, biarkan default
            if (!subMenu) return;

            e.preventDefault(); // agar tidak redirect #

            // Toggle menu-open
            parent.classList.toggle('menu-open');
          });
        });
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
