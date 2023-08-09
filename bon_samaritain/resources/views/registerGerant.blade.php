<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin Template · Bootstrap v5.1</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
   <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    

    <!-- Bootstrap core CSS -->


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
    <link href="{{ asset('signin1.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">

<div class=" bloc1">
  <form action="{{ route('gerant.store') }}" style="margin-top:20px" method="POST">
      @csrf
    <!-- <img class="" src="{{ asset('assets/brand/logo_rire.jpg') }}" alt="" width="150" height="100" style="margin-bottom:-35px"> -->
    <h1 class="h3 mb-3 fw-normal"><strong>Inscription</strong></h1>

    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="nom" placeholder="your name"  style="border-radius:20px">
      <label for="name">votre nom</label>
      @error('nom')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="prenom" placeholder="your name"  style="border-radius:20px">
      <label for="name">votre prenom</label>
      @error('prenom')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com"  style="border-radius:20px">
      <label for="email"> votre Email </label>
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password"  style="border-radius:20px">
      <label for="password">votre mot de passe</label>
      @error('password')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('confirm-password') is-invalid @enderror" name="confirmer_password" id="confirm-password" placeholder="confirm-password" style="border-radius:20px">
      <label for="confirm-password">Confirmer votre mot de passe</label>
      @error('confirmer_password')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    
    
    
    <button class="w-100 btn btn-lg btn-primary" type="submit"style="background-color:rgb(134, 10, 10);color:white;border-radius:20px;border:none;">S'inscrire</button>
    <!-- <div class="checkbox ">
      <label>
        <input type="checkbox" value="remember-me"> Sauvegarder § Tu as un compte?
      </label>
      </div> -->
       <h5 class="ml6">
    <span class="text-wrapper">
      <a href="login" style="text-decoration:none"><span class="letters">Connecte toi là</span></a>
    </span>
  </h5>
    
    <!-- <p class=" text-muted">&copy; 2021–2025</p> -->
  </form>
  <!-- <div><img class="mt-5 imrire " src="{{ asset('assets/brand/imrire.png') }}" alt="" style="height:400px;width:400px;"></div> -->
  </div> 
  </div>
</main>


<script src="{{ asset('assets/dist/js/script.js') }}"></script>
  </body>
</html>