<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('store', function(Request $request){
    // dd($req->file('facture'));
    // $req->file('facture')->store('factures');

    $filenamewithextension = $request->file('facture')->getClientOriginalName();
    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    $extension = $request->file('facture')->getClientOriginalExtension();
    $filenametostore = $filename.'_'.uniqid().'.'.$extension;
    Storage::disk('ftp')->put($filenametostore, fopen($request->file('facture'), 'r+'));

});