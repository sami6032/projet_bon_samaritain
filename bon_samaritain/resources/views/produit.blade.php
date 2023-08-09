<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Liste des produits</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
     <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}"> 
    

    <!-- Bootstrap core CSS -->
     <link href="{{ asset('index.css') }}" rel="stylesheet"> 
</head>
<body>
   

        <h1 class="text-center">Liste des produits</h1> <br><br>
        <div class="container">
        
        <a href="ajoutproduit" > 
            <input type="submit" value="Ajouter un produit">
         
         </a>
    </div>
        <table class=" container table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>prix</th>
                    <th>photo</th>
                    <th>description</th>
                    <th>category</th>
                    <!-- <th>user</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                
                    <tr>
                        <td>{{ $produit->id }}</td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->prix }}</td>
                        <td><img src="{{ asset('storage/picture/' . $produit->photo) }}" alt="Photo" class="img-thumbnail" width="50"></td>
                        <td>{{ $produit->description }}</td>
                        <td>{{ $produit->category->nom}}</td>
                        
                        <td>
                            <a href="" class="btn btn-success">Afficher</a>
                            <a href="{{ route('crud.edit', $produit) }}" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('destroy.produit', $produit->id) }}" style="display: inline;">
                              
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
</a>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="container">
         <form action="{{ route('logout') }}" method="post" class="btn btn-success">
            @csrf
            <input type="submit" value="deconnexion">
         </form>
    </div> <br>
    

    <!-- <div>
        <button class=" button_reserv btn btn-success">
            <a href="">
                faire une reservation
            </a>
        </button>
    </div> -->
    </div>
</body>
</html>
