<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard', app()->getLocale()) }}" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Yönetim</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">


                <li class="nav-item">
                    <a href="{{route('admin.slider.index', app()->getLocale())}}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Sliders

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.page.index', app()->getLocale())}}" class="nav-link">
                        <i class="nav-icon fas fa-paperclip"></i>
                        <p>
                            Pages

                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('admin.category.index', app()->getLocale())}}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Categories

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.model.index', app()->getLocale())}}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Models

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.insulation.index', app()->getLocale())}}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Insulations

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.product.index', app()->getLocale())}}" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>


{{--                <li class="nav-header">Products split by categories </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-cart-plus"></i>--}}
{{--                        <p>--}}
{{--                            Products--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}

{{--                        @foreach(($categories = \App\Models\Category::all() ) as $category_key=>$category)--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>--}}
{{--                                        {{$category->name}}--}}
{{--                                        <i class="right fas fa-angle-left"></i>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <ul class="nav nav-treeview">--}}
{{--                                    @foreach(($types = $category->type)  as $type_key => $type)--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="{{route('admin.product.bringByType',[app()->getLocale(), $type])}}" class="nav-link">--}}
{{--                                                <i class="far fa-dot-circle nav-icon"></i>--}}
{{--                                                <p>--}}
{{--                                                    {{$type->name}}--}}
{{--                                                </p>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}

{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}

{{--                    </ul>--}}
{{--                </li>--}}


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
