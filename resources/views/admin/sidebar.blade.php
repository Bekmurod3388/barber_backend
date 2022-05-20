<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.barber.index') ? 'active' : '' }}">
                    <a href="{{route('admin.barber.index')}}">
                        <i class="fas fa-cog"></i>
                        <p>Sartaroshlar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.services.index') ? 'active' : '' }}">
                    <a href="{{route('admin.services.index')}}">
                        <i class="fa fa-address-book" aria-hidden="true"></i>

                        <p>Servis</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.bookings.index') ? 'active' : '' }}">
                    <a href="{{route('admin.bookings.index')}}">
                        <i class="bi bi-journal-text"></i>
                        <p>Band Qilish</p>
                    </a>
                </li>
                <li class="nav-item {{request()->routeIs('admin.photo.index') ? 'active' : '' }}">
                    <a href="{{route('admin.photo.index')}}">
                        <i class="fas flaticon-photo-camera"></i>
                        <p>Photo</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.vidios.index') ? 'active' : '' }}">
                    <a href="{{route('admin.vidios.index')}}">
                        <i class="fas fa-video"></i>
                        <p>Video</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.sertifikat.index') ? 'active' : '' }}">
                    <a href="{{route('admin.sertifikat.index')}}">
                        <i class="bi bi-card-list"></i>
                        <p>Sertifikat</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



