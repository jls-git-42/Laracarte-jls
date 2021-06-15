<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\http\Controllers\ContactsController;
use App\Mail\ContactMessageCreated;

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

// routes vers les pages statiques
/*Route::get('/', [PagesController::class, 'home'])->name('home_path');
Route::get('/about', [PagesController::class, 'about'])->name('about_path');*/
// quand aucune ressource n'est utile dans une page statique on a pas besoin de passer par un controleur
//on peut directement appeler la vue concernée
Route::view('/','/pages/home',['nom'=>'Jls'])->name('home_path');
Route::view('/about','/pages/about')->name('about_path');


// route vers l'affichage de la page formulaire contact
Route::get('/contact', [ContactsController::class, 'create'])->name('contact_create');
// route vers le traitement de la page formulaire contact
Route::post('/contact', [ContactsController::class, 'store'])->name('contact_store');

// route test vers la page email contact
/*Route::get('/test-email',function(){

    return new ContactMessageCreated('JLS','jlouiss42@gmail.com','Merci pour Laracarte');

});*/