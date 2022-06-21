@include('layout.master')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Programme</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Manage Programme</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- <script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: "{{ url('/books') }}",
               columns: [
                        { data: 'Book_SSN', name: 'Book_SSN' },
                     ]
            });
         });
         </script> -->
    <!-- /.content-header -->
    <!-- <section class="container"> -->
 <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div> --><!-- /.container-fluid -->
    <!-- </section> -->
    @if(session('info'))
    {{session('info')}}
    @endif
    <!-- Main content -->
    <section class="content">
      <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Programme</h3>
              <a href="/add-programme" style="align:left;">Add Programme</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Programme Code</th>
                  <th>Programme Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($programs as $programme)
                     <tr>                    
                        <td>{{$programme->id}}</td>
                        <td>{{$programme->Program_code}}</td>
                        <td>{{$programme->Program_name}} </td>
                        <td>
                        <a href='{{url("programme/edit/{$programme->id}")}}'>edit</a>  
                        <a href='{{url("programme/delete/{$programme->id}")}}'>delete</a> 
                        </td>
                     </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Code</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>    
    </section>
    <script>
function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
        console.log(urlToRedirect); // verify if this is the right URL
        swal({
          title: "Are you sure?",
          text: "Once Book deleted, you will not be able to recover Data!",
          type: "warning",
          showCancelButton: true,
        })
        .then((willDelete) => {
          // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
          if (willDelete) {
            console.log(urlToRedirect);
            window.location.replace(urlToRedirect);
            // swal("Poof! Your imaginary file has been deleted!", {
            // });
          } else {
            swal("Your imaginary file is safe!");
          }
        });
      }



  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@include('layout.footer')


