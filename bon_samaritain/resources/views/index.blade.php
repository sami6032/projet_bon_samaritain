<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Liste des utilisateurs</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
     <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}"> 
    

    <!-- Bootstrap core CSS -->
     <link href="{{ asset('index.css') }}" rel="stylesheet"> 
</head>
<body>
   

        <h1 class="text-center">Liste des utilisateurs</h1> <br><br>
        <div class="container">
        
        <a href="registerGerant" > 
            <input type="submit" value="Ajouter un gérant">
         
         </a>
    </div>
        <table class=" container table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>email</th>
                    <th>role</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->type}}</td>
                       
                        <td>
                            @if ($user->photo)
                                <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo" class="img-thumbnail" width="100">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <!-- <a href="" class="btn btn-success">Afficher</a> -->
                            <a href="{{ route('crud.edit', $user) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('crud.destroy', $user) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                            </form>
                           
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
