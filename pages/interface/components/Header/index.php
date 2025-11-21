<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<header class="border-bottom bg-white shadow-sm">
    <div class="container py-2">
        <div class="d-flex align-items-center justify-content-between">

            <!-- Logo -->
            <a href="/" class="fs-4 fw-bold text-decoration-none text-primary">
                Integrador Pro
            </a>

            <!-- Navegação -->
            <ul class="nav d-none d-lg-flex">
                <li class="nav-item">
                    <a class="nav-link px-3 active fw-semibold" href="#">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Products</a>
                </li>
            </ul>

            <!-- Busca + Perfil -->
            <div class="d-flex align-items-center gap-3">

                <!-- Search -->
                <form class="d-none d-lg-block">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-light border-end-0">
                            🔍
                        </span>
                        <input type="search" class="form-control border-start-0" placeholder="Buscar...">
                    </div>
                </form>

                <!-- Avatar -->
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none" data-bs-toggle="dropdown">
                        <img src="https://github.com/oogabrielgodoy.png" width="36" height="36" class="rounded-circle shadow-sm" alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="#">Sign out</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</header>