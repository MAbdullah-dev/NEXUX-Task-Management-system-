<?php

use App\Livewire\AuthComponent;
use App\Livewire\MakeCompany;
use App\Livewire\Teams;
use App\Livewire\UserDashboard;
use Illuminate\Support\Facades\Route;

Route::get('login', AuthComponent::class)->name('login');
Route::get('/login-company', MakeCompany::class)->name('login-company');

Route::middleware('auth')->group(function () {

    Route::get('/', UserDashboard::class)->name('dashboard');
    Route::get('/teams',Teams::class)->name('teams');

});


