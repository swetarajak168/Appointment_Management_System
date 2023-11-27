@extends('layout.app');
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @if ($data['auth_user'] == 1)
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    {{-- {{ $users = DB::table('users')->count() }} --}}
                                    {{-- {{dd($users)  }} --}}
                                    <h3>{{ $data['user_count'] }}</h3>

                                    <p>Total Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('user.index') }}" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $data['doctor_count'] }}</h3>

                                    <p>Doctors</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-user-md" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('doctor.index') }}" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-warning ">
                                <div class="inner">
                                    <h3>{{ $data['admin_count'] }}</h3>

                                    <p> Admin</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $data['booking_count'] }}</h3>
                                    <p>Appointments</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $data['department_count'] }}</h3>
                                    <p>Departments</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                </div>
                                <a href="{{ route('department.index') }}" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $data['schedule_count'] }}</h3>
                                    <p>Schedules</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    View All <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                       
                            {{-- <div class="card-body">
                              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div> --}}
                            <!-- /.card-body -->
                        <!-- ./col -->
                    @elseif($data['auth_user'] == 2)
                        @if ($data['doctor'])
                            <div class="container-fluid">
                                <div class="row mt-3" >
                                    <div class="col-md-3">
                                        <div class="card  box-profile" style="padding:10px">
                                            <div class="text-center">
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset($data['doctor']->image) }}" alt="User profile picture">
                                            </div>

                                            <h3 class="profile-username text-center">

                                                {{ $data['doctor']->fname . ' ' . $data['doctor']->lname }}
                                            </h3>

                                            <p class="text-muted text-center">{{ $data['doctor']->specialization }}</p>

                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Department</b> <a
                                                        class="float-right">{{ $data['doctor']->department->department_name }}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Gender</b> <a class="float-right">{{ $data['doctor']->gender }}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Contact</b> <a
                                                        class="float-right">{{ $data['doctor']->contact }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Your Upcoming  Appointments</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">S.N</th>
                                                            <th>Patient Name</th>
                                                            <th>
                                                                Date
                                                            </th>
                                                            <th>Time</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data['doctor']->booking as $book)
                                                            @if ($book->status == 'approved')
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>
                                                                        {{ $book->patient->name }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $book->book_date_bs }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $book->start_time . '-' . $book->end_time }}
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                            {{-- <div class="card-footer clearfix">
                                                <ul class="pagination pagination-sm m-0 float-right">
                                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    @else{
                        <p>No user found</p>
                        }
                    @endif
                </div>
            </div>
        </section>
    </div>
    <script>
 var chartData =  Object.values(@json($data['department_name']));    //convert to json string
 console.log(chartData)
  $(function () {
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome', 
          'IE',
          'FireFox', 
          'Safari', 
          'Opera', 
          'Navigator', 
      ],
      datasets: [
        {
          data: chartData,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })
});
</script>

@endsection
