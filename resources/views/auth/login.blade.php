<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/signin.css">
  </head>
  <body>
    
    <main class="form-signin">
          <form action="/login" method="post">
            @csrf
            <h1 class=" mb-3 fw-bormal text-center mb-5"><a href="/">Goorita</a></h1>
            <h1 class="h3 mb-3 fw-normal">Please login</h1>
        
            <div class="form-floating">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
      
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
      </main>
      <p> {{ session()->has('failed')}} xx </p>
      @if (session()->has('failed'))
        <script>
          alert('email or password is wrong!');
        </script>
      @endif
  </body>
</html>

