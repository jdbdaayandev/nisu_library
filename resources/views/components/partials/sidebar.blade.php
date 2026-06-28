<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <img src="{{ asset('template/adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">My Offline App</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('template/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin User</a>
            </div>
        </div>

       <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-header">MAIN NAVIGATION</li>
        <li class="nav-item">
            <a href="/" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/catalog" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Book Catalog</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/circulation" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>Borrow & Return</p>
            </a>
        </li>

        <li class="nav-header">ADMINISTRATION</li>
        
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-university"></i>
                <p>
                    Libraries
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/catalog-types" class="nav-link">
                        <i class="far fa-circle nav-icon text-primary"></i>
                        <p>Catalog Types</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/categories" class="nav-link">
                        <i class="far fa-circle nav-icon text-success"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/authors" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Manage Authors</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    User Management
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/patrons" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Patrons (Members)</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/staff" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Library Staff</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-header">REPORTS</li>
        <li class="nav-item">
            <a href="/reports/overdue" class="nav-link">
                <i class="nav-icon fas fa-clock text-danger"></i>
                <p>Overdue Books</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/reports/fines" class="nav-link">
                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                <p>Fines & Payments</p>
            </a>
        </li>

        <li class="nav-header">SETTINGS</li>
        <li class="nav-item">
            <a href="/settings/general" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>System Settings</p>
            </a>
        </li>

    </ul>
</nav>
        </div>
    </aside>