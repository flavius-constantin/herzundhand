<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')
    ->name('welcome');

Route::livewire('/contact', 'contact-form')
    ->name('contact')
    ->layout('layouts.web', ['title' => 'Kontakt']);

Route::view('/disclaimer', 'disclaimer')
    ->name('disclaimer');

Route::view('/imprint', 'imprint')
    ->name('imprint');

Route::permanentRedirect('/status', 'https://status.herzundhand24.de')
    ->name('status');

if(!app()->environment('production')) {
    Route::get('/mailable', function() {
        $contact = App\Contact::latest()->first();

        return new App\Mail\ContactRequest($contact);
    });
    Route::get('/{page}', 'PagesController');
}