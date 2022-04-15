@extends('dashboard.main')
@section('dashboardContainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
      @endif
      <h2>My Posts</h2>
      <a href="/post" class="btn btn-primary mb-3">Add New Post</a>
      <div class="table-responsive">
        <table class="table table-striped table table-bordered">
          <thead>
            <tr style="background-color: #aaa">
              <th scope="col">no</th>
              <th scope="col">Title</th>
              <th scope="col" style="width: 50%">Sort Desc</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->sort_description }}</td>
                        <td>{{ date('d-m-Y', strtotime($data->created_at)) }}</td>
                        <td>
                              <a href=""  class="btn btn-sm btn-primary">View</a>
                              <a href="/post/{{ $data->id }}"  class="btn btn-sm btn-danger" onclick="return confirm('are you sure?')">delete</a>
                              <a href=""  class="btn btn-sm btn-warning">edit</a>
                        </td>
                    </tr>
                @endforeach
          </tbody>
        </table>
      </div>
    </main>

@endsection