    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li
                class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ request()->is('employees*') ? 'active' : '' }}">
                <a href="{{ route('employees') }}" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Karyawan</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ request()->is('items*') ? 'active' : '' }}">
                <a href="{{ route('items') }}" class='sidebar-link'>
                    <i class="bi bi-tags-fill"></i>
                    <span>Barang</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ request()->is('borrow*') ? 'active' : '' }}">
                <a href="{{ route('borrow.index') }}" class='sidebar-link'>
                    <i class="bi bi-arrow-down-up"></i>
                    <span>Peminjaman</span>
                </a>
            </li>

        </ul>
    </div>
