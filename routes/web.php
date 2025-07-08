<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;



Route::get('Home', function(){
    return view('home');
});

Route::redirect('/', 'Home')->name('homepage');


Route::get('About Us', function () {
    return view('About');
})->name('aboutpage');



Route::get('Shop', function () {
    return view('Product');
})->name('shoppage');



Route::get('Contact Us', function () {
    return view('contact');
})->name('contactpage');



Route::get('Crystal Butterfly Earrings Chain Pendant Necklace Combo Jewellery Set for Women', function(){
    return view('product1');
})->name('pro1');



Route::get('Pink Flowers Link Chain Adjustable Size Charm Alloy Bracelet Decorated With Crystals for Girls', function(){
 return view('product2');
})->name('pro2');


Route::get('Charm Tiger Eyes Stone Adjustable Chain Bracelet For Men Boys Accessories For Me', function(){
    return view('product3');
})->name('pro3');

Route::get('Shining Diva Fashion Royal Blue Crystal CZ Silver Plated Stylish Bracelet Gift for Girls', function(){
    return view('product4');
})->name('pro4');


Route::get('Valentine Gift By Shining Diva Italian Designer Platinum Plated Crystal Butterfly Earrings Chain Pendant Necklace Combo Jewellery Set for Women and Girls', function(){
    return view('product5');
})->name('pro5');

Route::get('Register', function(){
    return view('register');
})->name('register');

//register form usercontroller 

Route::resource('register', UserController::class);


Route::get('Login', function(){
    return view('login');
})->name('login');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
