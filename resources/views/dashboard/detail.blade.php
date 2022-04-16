@extends('dashboard.main')
@section('dashboardContainer')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        border-radius: 20px
}
</style>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      </div>
      <h2>{{ $title }}</h2>
            <div class="row mt-4 text-center justidy-content-center border">
                <h5>{{ $data->title }}</h5>
                <img src="/storage/{{ $data->image }}" alt="" style="width:70%;" class="center img-thumbnail mt-3">
                <div class="container mt-3 mb-5">
                    <p>{!! $data->description !!}</p>
                </div>
            </div>
      </div>
    </main>

@endsection