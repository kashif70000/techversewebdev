<div class="topbar d-flex justify-content-end align-items-center px-3 py-3 bg-light border-bottom">
    <div class="dropdown me-3">
        <button class="btn btn-light position-relative" type="button" id="notifDropdown" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="mdi mdi-bell-outline ms-0"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3
                <span class="visually-hidden">unread messages</span>
            </span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="notifDropdown" style="width: 250px;">
            <li class="dropdown-header fw-bold">Notifications</li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="mdi mdi-package-variant-closed me-2"></i> New item
                    found</a></li>
            <li>
        </ul>
    </div>

    <div class="dropdown me-3">
        <button class="btn btn-light position-relative" type="button" id="notifDropdown" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="mdi mdi-account-circle-outline ms-0"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="notifDropdown" style="width: 250px;">
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="mdi mdi-logout me-2"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

</div>
