
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

                <li class="nav-item {{  request()->routeIs('admin.solution.index') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <p>Sartaroshlar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.product.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-project-diagram"></i>
                        <p>Продукты</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.category.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-folder-open"></i>
                        <p>Категория</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



