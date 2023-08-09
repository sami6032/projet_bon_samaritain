<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('signin.css') }}" rel="stylesheet">

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
    <link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  
  <div class=" bloc1">
  <form class="formm" style="margin-top:100px" action="{{ route('login') }}" method="POST">
      @csrf
    
    <h1 class="h3 mb-5 fw-normal"style=""><strong>Connexion</strong></h1>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com" style="border-radius:20px">
      <label for="email">Votre email</label>
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating py-1">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" style="border-radius:20px">
      <label for="password">Votre mot de passe</label>
      @error('password')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
      
    
    <button class="w-100 btn btn-lg btn-" type="submit" style="background-color:#f2edf3;border-radius:20px">Se connecter</button>
    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Sauvegarder § Tu n'as pas de compte?
      </label>
    </div> -->

    <!-- <h5 class="ml6">
    <span class="text-wrapper">
      <a href="registerGerant" style="text-decoration:none"><span class="letters">Inscris toi là</span></a>
    </span>
  </h5> -->
  
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2021–2025</p> -->
    
  </form>
  <!-- <div><img class="mt-1 imrire " src="{{ asset('assets/brand/imrire.png') }}" alt="" style="width:400px;"></div> -->
  </div>
</main>
   

    <script src="{{ asset('assets/dist/js/script.js') }}"></script>
  </body>
</html>