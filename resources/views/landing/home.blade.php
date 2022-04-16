@extends('landing.main')
@section('landingContainer')

<main class="container">
    <div class="row g-5 mt-3">
      <div class="col-md-8">
        @if($posts->count())
          <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Recomended for you
          </h3>

          @foreach($posts as $post)
              <div class="row border mt-1">
                <div class="col-4">
                  <img src="/storage/{{ $post->image }}" alt="" class="img-thumbnail mt-3" width="100%" style="border: 1px solid black">
                </div>
                <div class="col-8">
                    <h3 class="">{{ $post['title'] }}</h3>
                    <p class="card-text"> by: </a></p>
                    <p class="card-text">{{ $post['sort_description'] }}</p>
                    <a href="/posts/{{ $post['slug'] }}" >Continue reading</a>
                </div>
              </div>
          @endforeach
        @else
          <div class="text-center">
            Post Not Found
          </div>
        @endif  
        <div class="mt-3">
      {{ $posts->links() }}
        </div>
      </div>
  
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aliquam ut minus rerum, quos sapiente! Ex, adipisci magni dolore modi cum id reprehenderit accusantium, vel laborum ipsam eveniet in. Voluptas!
            </p>
          </div>
          <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
</main>
@if (session()->has('success'))
  <script>
  alert('succes logout');
  </script>
@endif
@endsection