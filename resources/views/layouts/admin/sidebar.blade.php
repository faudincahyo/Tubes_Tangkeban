<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ (request()->is('admin')) ? 'active' : '' }}">
            <a href="{{ route('dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Wisata</li>

        <li class="sidebar-item {{ (request()->is('admin/wisata/create')) ? 'active' : '' }}">
            <a href="{{ route('wisata.create') }}" class='sidebar-link'>
                <i class="bi bi-box-arrow-in-up"></i>
                <span>Tambah Tempat Wisata</span>
            </a>
        </li>

        <li class="sidebar-item {{ (request()->is('v1/cities')) ? 'active' : '' }}">
            <a href="https://wa.me/62895324835376" target="__blank" class='sidebar-link'>
                <i class="bi bi-whatsapp"></i>
                <span>Hubungi Author</span>
            </a>
        </li>

    </ul>
</div>