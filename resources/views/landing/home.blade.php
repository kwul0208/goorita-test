@extends('landing.main')
@section('landingContainer')

<main class="container">

    <div class="row g-5 mt-3">
      <div class="col-md-8">
          <h3 class="pb-4 mb-4 fst-italic">
            Recomended for you
          </h3>

    
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