<!-- Main Sidebar Container -->



<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar  ">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3  d-flex">
            <div class="image">
                {{-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                <img src="" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href=" " class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            {{-- {{ dd(auth()->user()->role) }} --}}
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                  @if(auth()->user()->role == 1)
                  <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            {{ __('Dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="fa fa-user-circle " aria-hidden="true"></i>
                      <p>
                        {{__('Users')}}                        
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('doctor.index')}}" class="nav-link">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                      <p>
                        {{__('Doctors')}}                        
                      </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('department.index')}}" class="nav-link">
                        <i class="fa fa-building" aria-hidden="true"></i>
                      <p>
                        {{__('Department')}}                        
                      </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('appointment.index')}}" class="nav-link">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                      <p>
                        {{__('Appointment')}}                        
                      </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('schedule.index')}}" class="nav-link">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                      <p>
                        {{__('Schedule')}}                        
                      </p>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            {{ __('Dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('schedule.index')}}" class="nav-link">
                        <i class="fa fa-user-circle " aria-hidden="true"></i>
                      <p>
                          {{__('Appointment')}}                        
                      </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
