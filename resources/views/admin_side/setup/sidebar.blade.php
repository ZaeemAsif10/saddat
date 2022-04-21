<!--start sidebar -->

@php
$usr = Auth::guard('web')->user();
@endphp

<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('public/assets/images/logo-icon-2.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">SYN-UI</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        @if ($usr->can('dashboard.view'))
        <li>
            <a href="{{ url('dashboard') }}">
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        @endif


        @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="briefcase-sharp"></ion-icon>
                </div>
                <div class="menu-title">Roles & Permitions</div>
            </a>
            <ul>
                @if ($usr->can('role.view'))
                <li>
                    <a href="{{ route('roles') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>All Roles
                    </a>
                </li>
                @endif
                @if ($usr->can('role.view'))
                <li>
                    <a href="{{ route('role.create') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Create Roles
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif



        @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="briefcase-sharp"></ion-icon>
                </div>
                <div class="menu-title">Admin</div>
            </a>
            <ul>
                @if ($usr->can('admin.view'))
                <li>
                    <a href="#">
                        <ion-icon name="ellipse-outline"></ion-icon>All Admin
                    </a>
                </li>
                @endif
                @if ($usr->can('admin.view'))
                <li>
                    <a href="{{ route('admin.create') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Create Admin
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif





    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
