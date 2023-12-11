@include('layouts.app')
@include('sidebar')
@section('content')

{{-- <div class="row" style="display: block;">
  <div class="col-md-10 offset-2">
    <table class="table table-bordered table-striped" >
      <thead>
          <th class="py-1">Business Area</th>
          <th class="py-1">Description</th>
          <th class="py-1">Note</th>
      </thead>
      <tbody>
    <tr id="get-result">
    </tr>
    </tbody>
    </table>
  </div>
</div> --}}

<div class="content-wrapper" style="min-height: 1302.12px; display:block;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
             </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner" style="text-align: center;">
                  <h5>Projects : {{$projects}}</h5>
                  {{-- <h3>150</h3> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner" style="text-align: center;">
                  <h5>Organizations : {{$organizations}} </h5>
                  {{-- <h3>150</h3> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner" style="text-align: center;">
                  <h5>Locations : {{$locations}} </h5>
                  {{-- <h3>150</h3> --}}
                </div>
              </div>
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<script>
  function logout(element){
      let x = element.nextElementSibling;
     if(x.style.display = 'none'){
      x.style.display='block'
     } else{
      x.style.display = 'none'
     }
  }
</script>
      <main class="py-4" >
          {{-- @yield('content') --}}
      </main>
  </div>
</body>
</html>     
