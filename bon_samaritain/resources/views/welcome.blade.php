<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bon Samaritain</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo.png" />
  </head>
  <body>
    
    
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="" href="accueil"><img src="assets/images/logo.png" width="75px" height="75px" alt="logo" /></a>
          
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">
                    
                    @auth
                    {{ Auth::user()->nom }} {{ Auth::user()->prenom }}
                    @endauth
                  </p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                    <div class="container">
                        <form action="{{ route('logout') }}" method="post" class="btn btn-success">
                        @csrf
                        <input type="submit" value="deconnexion">
                        </form>
                    </div>
              </div>
            </li>
            
            <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search " style="width: 400px;height:10px ;">
              </div>
            </form>
          </div>
            <li class="nav-item nav-logout d-none d-lg-block" >
            <div class="container">
        
        <a href="ajoutproduit"  > 
            <input class="mb-3 " type="submit" value="Ajouter un produit" style="background-color: white;border-color:white;">
         
         </a>
    </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
            <div class="container">
        <a href="#liste des produits ajoutés" > 
            <input type="submit" value="liste des produits" style="background-color: white;border-color:white;">
            
         </a>
    </div>
            </li>
           
           
          </ul>


          
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                
                  <span class="font-weight-bold mb-2">
                    @auth
                    {{ Auth::user()->nom }} {{ Auth::user()->prenom }}
                    @endauth
                  </span>
                  <span class="text-secondary text-small">
                    @auth
                    {{ Auth::user()->role->type }}
                    @endauth
                  </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
           
            
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Bon Samaritain</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            @auth
    @if (Auth::user()->role_id === 1)
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title" style="margin-left: -30px;">MENU</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag "></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="registerGerant"> <input class="mb-3 " type="submit" value="Ajouter un gérant" style="background-color: white;border-color:white;">
         </a></li>
                  
                  <li class="nav-item"> <a class="nav-link" href="index"> <input type="submit" value="Liste des utilisateurs" style="background-color: white;border-color:white;"> </a></li>
                  
                </ul>
              </div>
            </li>
      
        @endif
        @endauth

            
            
           
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> ALIMENTATION BON SAMARITAIN
              </h3>
              
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Aperçu<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-12 pe-1">
                <img src="assets/images/dashboard/viv_chateaudeberne.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
            </div>

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" id="liste des produits ajoutés">Liste des produits</h4>
                    <div class="table-responsive">
                      <table class="table">
                        {{ $produits->links() }}
                        <thead>
                          <tr>
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
                    <!-- <a href="" class="btn btn-success">Cliquez là pour effectuer une action</a> -->
                        <a href="{{ url('detail/'.$produit->id)}}" class="btn btn-success">Afficher</a>
                        <a href="{{ route('produit.edit', $produit->id) }}" class="btn btn-primary">Modifier</a>
                        <a href="{{ route('destroy.produit', $produit->id) }}" style="display: inline;">
                          
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                       </a>
                       
                    </td>
                </tr>
            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          

            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Friandises</h4>
                    <div class="d-flex">
                      
                    </div>
                    <div class="row mt-3">
                    <div class="col-3 ps-1">
                        <img src="assets/images/dashboard/friandise3.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-3 pe-1">
                        <img src="assets/images/dashboard/friandise2.jpg" class="mw-100 w-75 rounded" alt="image">
                      </div>
                      <div class="col-3 pe-1">
                        <img src="assets/images/dashboard/friandise1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-3 ps-1">
                        <img src="assets/images/dashboard/friandise4.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                      <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                      <div class="mb-0 flex-grow">
                        <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                        <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                      </div>
                      <div class="ms-auto">
                        <i class="mdi mdi-heart-outline text-muted"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PRODUITS LAITIERS</h4>
                    
                    <div class="row mt-3">
                      <div class="col-3 pe-1">
                        <img src="assets/images/dashboard/lait1.jpg" class="mb-2 mw-100 w-75 rounded" alt="image">
                      </div>
                      <div class="col-3 pe-1">
                        <img src="assets/images/dashboard/lait2.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-3 ps-1">
                        <img src="assets/images/dashboard/lait3.jpg" class="mb-2 mw-100 w-75 rounded" alt="image">
                      </div>
                      <div class="col-3 ps-1">
                        <img src="assets/images/dashboard/lait4.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                      <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                      <div class="mb-0 flex-grow">
                        <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                        <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                      </div>
                      <div class="ms-auto">
                        <i class="mdi mdi-heart-outline text-muted"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">CHARCUTERIE</h4>
                    
                    <div class="row mt-3">
                      <div class="col-4 pe-1">
                        <img src="assets/images/dashboard/charcutterie1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="assets/images/dashboard/poisson_poulet_boeuf.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-4 ps-1">
                      <img src="assets/images/dashboard/charcutterie5.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="assets/images/dashboard/charcutterie3.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-4 ps-1">
                        <img src="assets/images/dashboard/charcutterie4.jpg" class="mw-100 w-100 rounded" alt="image">
                        <img src="assets/images/dashboard/charcutterie2.jpg" class="mw-100 w-75 rounded" alt="image">
                      </div>
                      
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                      <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                      <div class="mb-0 flex-grow">
                        <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                        <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                      </div>
                      <div class="ms-auto">
                        <i class="mdi mdi-heart-outline text-muted"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">VIN & CHAMPAGNE</h4>
                    
                    <div class="row mt-3">
                      <div class="col-4 pe-1">
                        <img src="assets/images/dashboard/vin1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="assets/images/dashboard/vin2.jpg" class="mw-100 w-75 rounded" alt="image">
                      </div>
                      <div class="col-4 ps-1">
                      <img src="assets/images/dashboard/vin3.jpg" class="mb-2 mw-100 w-75 rounded" alt="image">
                        <img src="assets/images/dashboard/vin4.jpg" class="mw-100 w-75 rounded" alt="image">
                      </div>
                      <div class="col-4 ps-1">
                        <img src="assets/images/dashboard/champagne1.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div>
                      
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                      <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                      <div class="mb-0 flex-grow">
                        <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                        <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                      </div>
                      <div class="ms-auto">
                        <i class="mdi mdi-heart-outline text-muted"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>




            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>