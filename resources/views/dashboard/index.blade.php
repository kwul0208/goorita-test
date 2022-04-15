@extends('dashboard.main')
@section('dashboardContainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <h2>My Posts</h2>
      <div class="table-responsive">
        <table class="table table-striped table">
          <thead>
            <tr>
              <th scope="col">no</th>
              <th scope="col">Title</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Lorem, ipsum.</td>
                  <td>Lorem, ipsum.</td>
                  <td>Lorem, ipsum.</td>
              </tr>
          </tbody>
        </table>
      </div>
    </main>

@endsection