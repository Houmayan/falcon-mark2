<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\query_form;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
///////////////////////////////////////////////// frontend
// home
Route::get('/', function () {
    return view('home');
})->name('home');


///////////////////////////////////////////////// user panel
// dashboard
Route::get('/dashboard', function () {
    return view('user_panel.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');

});
// connection
Route::get('/connection', function () {
    return view('user_panel.connection');
})->middleware(['auth', 'verified'])->name('connection');
// subscription
Route::get('/subscription', function () {
    return view('user_panel.subscription');
})->middleware(['auth', 'verified'])->name('subscription');
// dues
Route::get('/dues', function () {
    return view('user_panel.dues');
})->middleware(['auth', 'verified'])->name('dues');
// transactions
Route::get('/transactions', function () {
    return view('user_panel.transactions');
})->middleware(['auth', 'verified'])->name('transactions');
// complain
Route::get('/complain', function () {
    return view('user_panel.complain');
})->middleware(['auth', 'verified'])->name('complain');
// plans
// Route::get('/plans', function () {
//     return view('user_panel.plans');
// })->middleware(['auth', 'verified'])->name('plans');
Route::get('/plans',[ProfileController::class,'planInput'])->middleware(['auth', 'verified'])->name('plans');
// checkout
// Route::get('/checkout', function (Request $request) {
//     return view('user_panel.checkout');
// })->middleware(['auth', 'verified'])->name('checkout');
Route::get('/planurl/{name?}/{price?}',[ProfileController::class,'urlInput'])->middleware(['auth', 'verified'])->name('planurl');

// stripe
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout')->middleware(['auth', 'verified']);
Route::post('/checkout','App\Http\Controllers\CheckoutController@afterpayment')->middleware(['auth', 'verified'])->name('checkout.credit-card');


Route::get('/payment-success', function () {
    return view('user_panel.payment_success');
})->middleware(['auth', 'verified'])->name('payment_success');


///////////////////////////////////////////////// admin panel
// dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('adminDashboard');
// connections
Route::get('/admin/connections', function () {
    return view('admin.connections');
})->middleware(['auth', 'verified'])->name('adminConnections');
// dues
Route::get('/admin/dues', function () {
    return view('admin.dues');
})->middleware(['auth', 'verified'])->name('adminDues');
// payments
Route::get('/admin/payments', function () {
    return view('admin.payments');
})->middleware(['auth', 'verified'])->name('adminPayments');
// subscriptions
Route::get('/admin/subscriptions', function () {
    return view('admin.subscriptions');
})->middleware(['auth', 'verified'])->name('adminSubscriptions');
// users
Route::get('/admin/users', function () {
    return view('admin.users');
})->middleware(['auth', 'verified'])->name('adminUsers');
// profile
Route::get('/admin/profile', function () {
    return view('admin.profile');
})->middleware(['auth', 'verified'])->name('adminProfile');


///////////////////////////////////////////////// user panel
// dashboard
Route::get('/super-admin/dashboard', function () {
    return view('super_admin.dashboard');
})->middleware(['auth', 'verified'])->name('superDashboard');
// settings
Route::get('/super-admin/settings', function () {
    return view('super_admin.settings');
})->middleware(['auth', 'verified'])->name('superSettings');
// admins
Route::get('/super-admin/admins', function () {
    return view('super_admin.admins');
})->middleware(['auth', 'verified'])->name('superAdmins');
// users
Route::get('/super-admin/users', function () {
    return view('super_admin.users');
})->middleware(['auth', 'verified'])->name('superUsers');


// smtp mail
Route::post('send/mail',[query_form::class,'send_mail'])->name('send.mail');



require __DIR__.'/auth.php';