@extends('layout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Permissions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('permissions.index')}}">Permissions</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      {{-- crete permission form --}}
        <form action="/permissions" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter permission name">
            {{-- error with span --}}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            {{-- guard field --}}
            <div class="form-group">
            <label for="guard_name">Guard Name</label>
            <input type="text" name="guard_name" value="web" class="form-control" id="guard_name" placeholder="Enter guard name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection