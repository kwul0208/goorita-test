@extends('dashboard.main')
@section('dashboardContainer')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 p-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      </div>
      <h2>{{ $title }}</h2>
            <div class="row mt-4">
                <form action="/post/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <img src="/storage/{{ $data->image }}" alt="" class="img-thumbnail mt-3" width="50%" style="border: 1px solid black">
                        <div class="mb-3">
                            <label for="image" class="form-label">Thumbnail: (img|max:1mb)</label>
                            <input type="hidden" name="oldImage" value="{{ $data->image }}">
                            <input class="form-control" type="file" id="image" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </div>
                        <label for="content">Body</label>
                        <div class="mb-3">
                            <textarea name="body" id="body" cols="30" rows="10" >{{ $data->description }}</textarea>
                            @error('body')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
      </div>
    </main>

@endsection