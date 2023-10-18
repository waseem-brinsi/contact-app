<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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





Route::get('/',welcomeController::class);
// Route::resource('/contacts',contactController::class);

Route::get('/contacts',[contactController::class,'index'])->name('contacts.index');
Route::post('/contacts',[contactController::class,'store'])->name('contacts.store');

Route::get('/contacts/create',[contactController::class,'create'])->name('contacts.create');
Route::get('/contacts/{id}',[contactController::class,'show'])->whereNumber('id')->name('contacts.show');

Route::get('/contacts/{id}/edit',[contactController::class,'edit'])->whereNumber('id')->name('contacts.edit');
Route::put('/contacts/{id}',[contactController::class,'update'])->whereNumber('id')->name('contacts.update');

Route::delete('/contacts/{id}',[contactController::class,'destroy'])->whereNumber('id')->name('contacts.destroy');

Route::resources([
    '/tag'=> TagController::class,
    '/task'=> TaskController::class
]);

Route::resource('/Activities',ActivityController::class)->except([
    'index','show']
);











Route::get('/companies/{name?}',function($Name=null){
    if ($Name) {
        return 'Company'.$Name;
    }
    else {
        return 'All Company';
    }
})->whereAlphaNumeric('Name');






Route::fallback(function(){
    return '<h1>Sorry this page Do Not Exist</h1>';
});
