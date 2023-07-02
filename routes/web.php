<?php

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

 function getContacts()
{
   return     [
    1 => ['name'=>'wassim','phone'=>'123454678'],
    2 => ['name'=>'chadi','phone'=>'123454678'],
    3 => ['name'=>'wajdi','phone'=>'123454678'],
];
}



Route::get('/', function () {

    return view('welcome');
});

Route::get('/contacts',function(){
    $companies = [
        1=>["name"=>"Company One","contact"=>3],
        2=>["name"=>"Company Tow","contact"=>7],
        3=>["name"=>"Company Three","contact"=>9]
    ];

    $contacts = getContacts();
    dump($contacts,$companies);
    return view('contacts.index')
                                ->with('contacts',$contacts)
                                ->with('companies',$companies);
})->name('contacts.index');



Route::get('/contacts/create',function(){
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}',function($id){
    $contacts = getContacts();
    abort_unless(isset($contacts[$id]),404);
    $contact = $contacts[$id];
    dump($contact);
    return view('contacts.show')->with('contact',$contact) ;
})->whereNumber('id')->name('contacts.show');

Route::get('/companies/{name?}',function($Name=null){
    if ($Name) {
        return 'Company'.$Name;
    }
    else {
        return 'All Company';
    }
})->whereAlphaNumeric('Name');

Route::get('/edit',function(){
    return view('contacts.edit');
})->name('contacts.edit');



Route::fallback(function(){
    return '<h1>Sorry this page Do Not Exist</h1>';
});
