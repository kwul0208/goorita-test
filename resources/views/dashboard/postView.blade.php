@extends('dashboard.main')
@section('dashboardContainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      </div>
      <h2>{{ $title }}</h2>
            <div class="row mt-4">
                <form action="/post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Thumbnail: (img|max:1mb)</label>
                            <input class="form-control" type="file" id="image" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <label for="content">Body</label>
                        <div class="mb-3">
                            <input id="x" type="hidden" name="body">
                            <trix-editor input="x"></trix-editor>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
      </div>
    </main>

@endsection