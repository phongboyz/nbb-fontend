<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });


Route::get('/', App\Livewire\HomeComponent::class)->name('home');
Route::get('/web-page-menu/{id}', App\Livewire\Page\PageComponent::class)->name('page.menu');
Route::get('/web-view-menu/{id}', App\Livewire\Menu\ViewComponent::class)->name('view.menu');

Route::get('/maps', App\Livewire\MapComponent::class)->name('map');