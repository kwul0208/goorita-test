@extends('landing.main')
@section('landingContainer')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        border-radius: 20px
}
</style>
<main class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-8">
            <h4 class="text-center">{{ $post->title }}</h4>
            <img src="{{ asset('storage') }}/{{ $post->image }}" alt="" class="img-thumbnail mt-3 center" width="70%">
            <p class="mt-5">{{ $post->description }}</p>
        </div>
        
    </div>
</main>
@endsection