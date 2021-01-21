<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link"><image class="app-logo" src="{{ asset('/favicon.ico') }}"/><span class="brand-text app-name font-weight-light"> Module</span></a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('settings')}}" class="nav-link"><i class="fas fa-cogs"></i> <p>Настройки</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('description')}}" class="nav-link"><i class="fas fa-file-prescription"></i> <p>Описание</p></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('support')}}" class="nav-link"><i class="fas fa-hands-helping"></i> <p>Поддержка</p></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
