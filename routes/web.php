<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AssociationAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/',[AssociationController::class,'Acceuil'])->name('acceuil');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/liste_evenement', [AssociationController::class, 'ListeEvenement'])->name('liste_evenement');

Route::get('delete_event/{id}', [AssociationController::class, 'DeleteEvent'])->name('delete_event');
Route::post('/update_event/{id}', [AssociationController::class, 'UpdateEvent'])->name('update_event');

Route::get('update_event/{id}',[AssociationController::class,'UpdateEvent'])->name('update_event');
Route::post('/update_event/{id}', [AssociationController::class, 'UpdateEventPost'])->name('update_event');

Route::get('association_login',[AssociationController::class,'VendorLogin'])->name('association_login');
Route::post('/association/add_event', [AssociationController::class, 'addEvent'])->name('association.add_event');
Route::get('admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
Route::get('association/dashboard',[AssociationController::class,'AssociationDashboard'])->name('association.dashboard');
Route::get('become_association',[AssociationController::class,'BecomeAssociate'])->name('become.association');
Route::post('/association/register', [AssociationController::class, 'AssociationRegister'])->name('association.register');

Route::get('details/{id}',[AssociationController::class,'Details'])->name('details');
Route::get('all_reservation',[AssociationController::class,'AllReservation'])->name('all_reservation');
Route::post('/accepter-reservation/{id}', [AssociationController::class, 'accept'])->name('accepter_reservation');
Route::post('/refuser-reservation/{id}', [AssociationController::class, 'refuse'])->name('refuser_reservation');
Route::get('/reservation_event/{evenement_id}', [ReservationController::class, 'showReservationForm'])->name('reservation_event');
Route::post('/reservation', [ReservationController::class, 'Reserver'])->name('reservation');

Route::get('association_page',[AssociationController::class,'PageAsso'])->name('association_page');
Route::get('/login/association', [AssociationAuthController::class, 'showLoginForm'])->name('association.login');
Route::post('/login/association', [AssociationAuthController::class, 'login']);
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('historique',[ReservationController::class,'Historique'])->name('historique');
Route::post('/cancel-reservation/{id}', [ReservationController::class,'cancelReservation'])->name('cancel_reservation');
Route::delete('/supprimer-reservation/{id}', [ReservationController::class,'supprimerReservation'])->name('supprimer_reservation');

require __DIR__.'/auth.php';
