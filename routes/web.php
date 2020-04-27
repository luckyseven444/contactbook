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
Route::redirect('/', 'contacts');
Route::resource('contacts', 'ContactController')->except(['destroy', 'phones', 'addresses']);
Route::get('contacts/delete/{id}', 'ContactController@destroy')->name('contacts.destroy');
Route::get('contacts/phones/{id}', 'ContactController@phones')->name('contacts.phones');
Route::get('contacts/addresses/{id}', 'ContactController@addresses')->name('contacts.addresses');

Route::resource('addresses', 'AddressController')->except(['destroy']);
Route::get('addresses/delete/{id}', 'AddressController@destroy')->name('addresses.destroy');

Route::resource('phones', 'PhoneController')->except(['destroy']);
Route::get('phones/delete/{id}', 'PhoneController@destroy')->name('phones.destroy');

Route::resource('names', 'NameController')->except(['destroy']);
Route::get('names/delete/{id}', 'NameController@destroy')->name('names.destroy');
