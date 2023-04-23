@extends('layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active">Users</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="myTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Count</th>
              <th>Name</th>
              <th>Password</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($data as $key=>$row)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->password }}</td>
                  <td>{{ $row->email }}</td>
                  <td>
                    <a href="{{ Route('users.show', $row->id) }}">Edit</a>
                  </td>
                </tr>
                
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Count</th>
              <th>Name</th>
              <th>Password</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>
<!-- /.content -->

@endsection

@push('js')
<script>
  let table = new DataTable('#myTable');
</script>
    
@endpush

