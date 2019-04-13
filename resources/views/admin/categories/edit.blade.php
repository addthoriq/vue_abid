@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Create Category
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home.index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('categories.index') }}">Categories</a></li>
    <li class="active">Edit Category</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">

        <form method="post" action="{{ route('categories.update', $category->id) }}">
          @csrf
          @method('PUT')
          <div class="box-body">
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info">Update</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection