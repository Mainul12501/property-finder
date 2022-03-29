<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Property Finder</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/fortnoxes*") ? "menu-open" : "" }} {{ request()->is("admin/integrations*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan


                @can('blog-module')
                <li class="nav-item has-treeview {{ request()->is("admin/blog-categories*") ? "menu-open" : "" }} {{ request()->is("admin/blogs*") ? "menu-open" : "" }} ">
                    <a class="nav-link nav-dropdown-toggle" href="#">
{{--                        <i class="fa-fw nav-icon fas fa-book">--}}

{{--                        </i>--}}
                        <i class="fa-solid fa-blog"></i> &nbsp;
                        <p>
{{--                            {{ trans('cruds.assetManagement.title') }}--}}
                            Blog Management
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('blog-categories')
                            <li class="nav-item">
                                <a href="{{ route("admin.blog-categories.index") }}" class="nav-link {{ request()->is("admin/blog-categories") || request()->is("admin/blog-categories/*") ? "active" : "" }}">
{{--                                    <i class="fa-fw nav-icon fas fa-tags">--}}

{{--                                    </i>--}}
                                    <i class="fa-brands fa-microblog"></i>&nbsp;
                                    <p>
{{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                        Blog Categories
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('blogs-section')
                            <li class="nav-item">
                                <a href="{{ route("admin.blogs.index") }}" class="nav-link {{ request()->is("admin/blogs") || request()->is("admin/blogs/*") ? "active" : "" }}">
{{--                                    <i class="fa-fw nav-icon fas fa-tags">--}}

{{--                                    </i>--}}
                                    <i class="fa-brands fa-blogger"></i> &nbsp;
                                    <p>
{{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                        Blogs
                                    </p>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('company-module')
                <li class="nav-item has-treeview {{ request()->is("admin/companies*") ? "menu-open" : "" }} {{ request()->is("admin/agents*") ? "menu-open" : "" }} ">
                    <a class="nav-link nav-dropdown-toggle" href="#">
{{--                        <i class="fa-fw nav-icon fas fa-book">--}}

{{--                        </i>--}}
                        <i class="fa-solid fa-dungeon"></i> &nbsp;
                        <p>
{{--                            {{ trans('cruds.assetManagement.title') }}--}}
                            Company Management
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('company-menu')
                            <li class="nav-item">
                                <a href="{{ route("admin.companies.index") }}" class="nav-link {{ request()->is("admin/companies") || request()->is("admin/companies/*") ? "active" : "" }}">
                                    <i class="fa-fw nav-icon fas fa-tags">

                                    </i>
                                    <p>
{{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                        Company
                                    </p>
                                </a>
                            </li>
                        @endcan
                        @can('agent-menu')
                            <li class="nav-item">
                                <a href="{{ route("admin.agents.index") }}" class="nav-link {{ request()->is("admin/agents") || request()->is("admin/agents/*") ? "active" : "" }}">
                                    <i class="fa-fw nav-icon fas fa-tags">

                                    </i>
                                    <p>
{{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                        Agent
                                    </p>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                @endcan

                @can('property-module')
                    <li class="nav-item has-treeview {{ request()->is("admin/property-types*") ? "menu-open" : "" }} {{ request()->is("admin/property-promotion-types*") ? "menu-open" : "" }} {{ request()->is("admin/property-ads-types*") ? "menu-open" : "" }} {{ request()->is("admin/properties*") ? "menu-open" : "" }} ">
                        <a class="nav-link nav-dropdown-toggle" href="#">
{{--                            <i class="fa-fw nav-icon fas fa-book">--}}

{{--                            </i>--}}
                            <i class="fa-solid fa-city"></i> &nbsp;
                            <p>
                                {{--                            {{ trans('cruds.assetManagement.title') }}--}}
                                Property Management
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('property-type')
                                <li class="nav-item">
                                    <a href="{{ route("admin.property-types.index") }}" class="nav-link {{ request()->is("admin/property-types") || request()->is("admin/property-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tags">

                                        </i>
                                        <p>
                                            {{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                            Property Type
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('property-promotion-type')
                                <li class="nav-item">
                                    <a href="{{ route("admin.property-promotion-types.index") }}" class="nav-link {{ request()->is("admin/property-promotion-types") || request()->is("admin/property-promotion-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tags">

                                        </i>
                                        <p>
                                            {{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                            Property Promotion Type
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('property-ads-type')
                                <li class="nav-item">
                                    <a href="{{ route("admin.property-ads-types.index") }}" class="nav-link {{ request()->is("admin/property-ads-types") || request()->is("admin/property-ads-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-tags">

                                        </i>
                                        <p>
                                            {{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                            Property Ads Type
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('property-menu')
                                <li class="nav-item">
                                    <a href="{{ route("admin.properties.index") }}" class="nav-link {{ request()->is("admin/properties") || request()->is("admin/properties/*") ? "active" : "" }}">
{{--                                        <i class="fa-fw nav-icon fas fa-tags">--}}

{{--                                        </i>--}}
                                        <i class="fa-solid fa-building-columns"></i> &nbsp;
                                        <p>
                                            {{--                                        {{ trans('cruds.assetCategory.title') }}--}}
                                            Property
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('seo-module')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/seo') || request()->is('admin/seo/*') ? 'active' : '' }}" href="{{ route('admin.seo.index') }}">
{{--                            <i class="fa-fw fas fa-key nav-icon">--}}
{{--                            </i>--}}
                            <i class="fa-solid fa-rectangle-ad"></i> &nbsp;
                            <p>
{{--                                {{ trans('global.change_password') }}--}}
                                SEO Management
                            </p>
                        </a>
                    </li>
                @endcan


                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
