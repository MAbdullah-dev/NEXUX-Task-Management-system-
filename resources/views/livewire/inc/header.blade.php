<header class="w-100">
    <div class="d-flex align-items-center justify-content-between p-3 bg-light">
        <div class="d-flex align-items-center">
            <h1 class=" fw-bold me-4">Nexus<span class="ms-2">🗂️</span></h1>
        </div>
        <div class="d-flex align-items-center">
            <div class="position-relative">
                <input type="text" class="form-control ps-5 pe-5 rounded-pill" placeholder="Search">
                <i class="fa fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
            </div>
        </div>
    </div>
    <div class="links bg-light p-2">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} fw-bold"
                    href="{{ route('dashboard') }}" wire:navigate>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'projects' ? 'active' : '' }} fw-bold" href=""
                    wire:navigate>
                    <span>
                        Projects
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Route::currentRouteName() == 'teams' ? 'active' : '' }} fw-bold"
                     data-bs-toggle="dropdown" aria-expanded="false">
                    <span>
                        Teams
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item fw-semibold" type="button" data-bs-toggle="modal" data-bs-target="#createTeam">
                            Create Team <i class="fa-solid fa-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item fw-semibold" href="#">Another action</a>
                    </li>
                    <li>
                        <a class="dropdown-item fw-semibold" href="#">Something else here</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item fw-semibold" href="{{ route('teams') }}">team and members</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'tickets' ? 'active' : '' }} fw-bold" href=""
                    wire:navigate>
                    <span>
                        Tickets
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'reports' ? 'active' : '' }} fw-bold" href=""
                    wire:navigate>
                    <span>
                        Reports
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <livewire:modal.create-team />

</header>
