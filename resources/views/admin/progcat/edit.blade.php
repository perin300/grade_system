@include('layout.master')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Programme Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admindashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/location')}}">Manage Programme Category</a></li>
              <li class="breadcrumb-item active">Edit Programme Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
              <form role="form" action="{{url('progcat/update/'.$data->id)}}" method="POST">
  @csrf
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Programme Category </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="col-md-6" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Programme Category code</label>
                    <input required type="text" readonly name="ProgCat_code" value={{  $data->ProgCat_code }} class="form-control" id="exampleInputEmail1" 
                    placeholder="Programme Category  Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Programme Category Name</label>
                    <input required type="text" name="ProgCat_name" class="form-control" value={{  $data->ProgCat_name }} id="exampleInputEmail1" 
                    placeholder="Description">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer" >
                  <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->   	
    </section>


@include('layout.footer')