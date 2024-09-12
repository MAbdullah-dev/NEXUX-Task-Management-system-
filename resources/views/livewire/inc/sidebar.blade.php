<div id="sidebar" class="sidebar bg-white d-flex flex-column vh-100">
    <!-- Logo -->
    <div class="logo p-4 d-flex align-items-center justify-content-between">
        <img src="{{ asset('images/logo.gif') }}" alt="">
        <i id="toggleButton" style="color: #817F7D" class="fa-solid fa-bars"></i>
    </div>
    <!-- Links -->
    <div class="links flex-grow-1 p-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} fw-bold"
                    href="{{ route('dashboard') }}" wire:navigate>
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'project' ? 'active' : '' }} fw-bold"
                    href="" wire:navigate>
                    <i class="fas fa-tasks"></i>
                    <span>Projects</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'teams' ? 'active' : '' }} fw-bold"
                    href="{{ route('teams') }}" wire:navigate>
                    <i class="fas fa-users"></i>
                    <span>Teams</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'tickets' ? 'active' : '' }} fw-bold"
                    href="" wire:navigate>
                    <i class="fas fa-bug"></i>
                    <span>Tickets</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'reports' ? 'active' : '' }} fw-bold"
                    href="" wire:navigate>
                    <i class="fas fa-chart-line"></i>
                    <span>Reports</span>
                </a>
            </li>
        </ul>
    </div>



    <!-- Footer -->
    <div class="footer p-3 text-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" wire:click="SignOut" href="#"><i style="color: #0A58CA"
                        class="fa-solid fa-arrow-right-from-bracket"></i> <span>Logout</span></a>
            </li>
        </ul>
    </div>

</div>


@push('js')
    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active'); // Toggles the 'active' class
        });
    </script>
@endpush
