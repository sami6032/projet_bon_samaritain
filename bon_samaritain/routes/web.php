<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', function () {
//   return view('welcome');

//   });

Route::middleware('admin')->group(function () {
  Route::get('accueil', [ProduitController::class,'welcome'])->name('accueil');
  Route::get('produit', [ProduitController::class,'produit'])->name('produit');
  Route::get('index', [UserController::class,'index'])->name('index');
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/ajoutproduit', [ProduitController::class, 'ajoutproduit'])->name('ajoutproduit');
  Route::get('/registerAdmin', [AuthController::class, 'registerAdmin'])->name('registerAdmin');
});





// Login
Route::get('login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

//register

Route::get('/registerGerant', [AuthController::class, 'registerGerant'])->name('registerGerant');
Route::post('/registerAdmin', [AuthController::class, 'storeAdmin'])->name('admin.store');
Route::post('/registerGerant', [AuthController::class, 'storeGerant'])->name('gerant.store');

// Logout



Route::get('/produit', [ProduitController::class, 'produit'])->name('produit');
Route::get('/editProduit/{id}', [ProduitController::class, 'editProduit'])->name('editProduit');
Route::resource('produit',ProduitController::class);
// Route::post('/updateProduit', [ProduitController::class, 'updateProduit'])->name('updateProduit');
Route::post('/storeproduit', [ProduitController::class, 'storeproduit'])->name('storeproduit');
Route::get('/delete/{id}', [ProduitController::class, 'destroy'])->name('destroy.produit');
Route::get('/update', [ProduitController::class, 'update'])->name('update');

Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
Route::post('/crud', [CrudController::class, 'store'])->name('crud.store');
Route::get('/crud/{crud}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::put('/crud/{crud}', [CrudController::class, 'update'])->name('crud.update');
Route::delete('/crud/{crud}', [CrudController::class, 'destroy'])->name('crud.destroy');

Route::resource('produit', ProduitController::class);


//middleware

 
