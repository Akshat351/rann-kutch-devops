<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.home') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/permissions*') ? 'c-show' : '' }} {{ request()->is('admin/roles*') ? 'c-show' : '' }} {{ request()->is('admin/users*') ? 'c-show' : '' }} {{ request()->is('admin/audit-logs*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.permissions.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.roles.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.users.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.audit-logs.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('source_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.sources.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/sources') || request()->is('admin/sources/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-play c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.source.title') }}
                </a>
            </li>
        @endcan
        @can('destination_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.destinations.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/destinations') || request()->is('admin/destinations/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-plane-arrival c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.destination.title') }}
                </a>
            </li>
        @endcan
        @can('trip_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.trips.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/trips') || request()->is('admin/trips/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-taxi c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.trip.title') }}
                </a>
            </li>
        @endcan

        @can('local_cab_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.local-cabs.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/local-cabs') || request()->is('admin/local-cabs/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-shuttle-van c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.localCab.title') }}
                </a>
            </li>
        @endcan

        @can('blog_access')
            <li
                class="c-sidebar-nav-dropdown {{ request()->is('admin/blog-categories*') ? 'c-show' : '' }} {{ request()->is('admin/blog-posts*') ? 'c-show' : '' }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fab fa-blogger-b c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.blog.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('blog_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.blog-categories.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/blog-categories') || request()->is('admin/blog-categories/*') ? 'c-active' : '' }}">
                                <i class="fa-fw fas fa-align-center c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.blogCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('blog_post_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('admin.blog-posts.index') }}"
                                class="c-sidebar-nav-link {{ request()->is('admin/blog-posts') || request()->is('admin/blog-posts/*') ? 'c-active' : '' }}">
                                <i class="fa-fw far fa-calendar-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.blogPost.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('priceperkm_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.priceperkm.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/priceperkm') || request()->is('admin/priceperkm/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.priceperkm.title') }}
                </a>
            </li>
        @endcan

        @can('faq_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.faqs.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/faqs') || request()->is('admin/faqs/*') ? 'c-active' : '' }}">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-question">

                    </i>
                    {{ trans('cruds.faq.title') }}
                </a>
            </li>
        @endcan
        @can('local_city_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.local-cities.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/local-cities') || request()->is('admin/local-cities/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-bus-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.localCity.title') }}
                </a>
            </li>
        @endcan
      
        @can('inquiry_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route('admin.inquiries.index') }}"
                    class="c-sidebar-nav-link {{ request()->is('admin/inquiries') || request()->is('admin/inquiries/*') ? 'c-active' : '' }}">
                    <i class="fa-fw fas fa-address-book c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.inquiry.title') }}
                </a>
            </li>
        @endcan
        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                        href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
