<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin-home')}}">
                <i class="bi bi-grid"></i>
                <span>{{ __('trans.Dashboard') }}</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>{{ __('trans.Cài Đặt Trang Chủ') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin-header-setting')}}">
                        <i class="bi bi-circle"></i><span>{{ __('trans.Cài Đặt Header') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin-transportation-company-settings')}}">
                        <i class="bi bi-circle"></i><span>{{ __('trans.Transportation company') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin-client-review')}}">
                        <i class="bi bi-circle"></i><span>{{ __('trans.Our Client Reviews') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>{{ __('trans.About us') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin-about-us')}}">
                        <i class="bi bi-circle"></i><span>{{ __('trans.About us') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>{{ __('trans.Service') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin-service-create')}}">
                        <i class="bi bi-circle"></i><span>{{ __('trans.Create Service') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin-service')}}">
                        <i class="bi bi-circle"></i><span>{{ __('trans.Edit Service') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>{{ __('trans.Blog') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin-blog')}}">
                        <i class="bi bi-circle"></i><span>{{ __('trans.List blog') }}</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Charts Nav -->

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">--}}
{{--                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>--}}
{{--            </a>--}}
{{--            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">--}}
{{--                <li>--}}
{{--                    <a href="icons-bootstrap.html">--}}
{{--                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="icons-remix.html">--}}
{{--                        <i class="bi bi-circle"></i><span>Remix Icons</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="icons-boxicons.html">--}}
{{--                        <i class="bi bi-circle"></i><span>Boxicons</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li><!-- End Icons Nav -->--}}

        <li class="nav-heading">{{ __('trans.Pages') }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin-setting')}}">
                <i class="bi bi-person"></i>
                <span>{{ __('trans.Setting') }}</span>
            </a>
        </li><!-- End Profile Page Nav -->

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-faq.html">--}}
{{--                <i class="bi bi-question-circle"></i>--}}
{{--                <span>F.A.Q</span>--}}
{{--            </a>--}}
{{--        </li><!-- End F.A.Q Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-contact.html">--}}
{{--                <i class="bi bi-envelope"></i>--}}
{{--                <span>Contact</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Contact Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-register.html">--}}
{{--                <i class="bi bi-card-list"></i>--}}
{{--                <span>Register</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Register Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-login.html">--}}
{{--                <i class="bi bi-box-arrow-in-right"></i>--}}
{{--                <span>Login</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Login Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="pages-error-404.html">--}}
{{--                <i class="bi bi-dash-circle"></i>--}}
{{--                <span>Error 404</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Error 404 Page Nav -->--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link " href="pages-blank.html">--}}
{{--                <i class="bi bi-file-earmark"></i>--}}
{{--                <span>Blank</span>--}}
{{--            </a>--}}
{{--        </li><!-- End Blank Page Nav -->--}}

    </ul>

</aside>
