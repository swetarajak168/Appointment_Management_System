<!-- Main Sidebar Container -->



<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar  ">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3  d-flex">
            <div class="image">
                {{-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                <img src="{{ route('dashboard') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>

             

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                @if (auth()->user()->role == 1)
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                {{ __('Dashboard') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="fa fa-user-circle " aria-hidden="true"></i>
                            <p>
                                {{ __('Users') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('department.index') }}" class="nav-link">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <p>
                                {{ __('Department') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('doctor.index') }}" class="nav-link">
                            <i class="fa fa-user-md" aria-hidden="true"></i>
                            <p>
                                {{ __('Doctors') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('schedule.index') }}" class="nav-link">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <p>
                                {{ __('Schedule') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('appointment.index') }}" class="nav-link">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                            <p>
                                {{ __('Appointment') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('page.index') }}" class="nav-link">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <p> 
                                {{ __('Pages') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('menu.index') }}" class="nav-link">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <p>
                                {{ __('Dynamic Menu') }}
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                          <p>
                           {{__('Client') }}
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{ route('contactDetail.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Contact Details</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('testimonial.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Testimonials Detail</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('faq.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>FAQ</p>
                            </a>
                          </li>
                        </ul>
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
                        <a href="{{ route('schedule.index') }}" class="nav-link">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <p>
                                {{ __('Schedule') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('appointment.index') }}" class="nav-link">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                            <p>
                                {{ __('Appointment') }}
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
