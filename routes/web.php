<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{service:slug}', [PageController::class, 'showService'])->name('services.show');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::post('/calculator/estimate', [CalculatorController::class, 'estimate'])->name('calculator.estimate');
Route::post('/calculator/submit', [CalculatorController::class, 'submit'])->name('calculator.submit');
Route::get('/calculator/widget/{type}', [CalculatorController::class, 'widget'])->name('calculator.widget');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/calculator/sks', [PageController::class, 'calculatorSks'])->name('calculator.sks');
Route::get('/calculator/vols', [PageController::class, 'calculatorVols'])->name('calculator.vols');