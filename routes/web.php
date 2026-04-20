<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('forget-password', 'App\Http\Controllers\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
Route::post('forget-password', 'App\Http\Controllers\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post');

Route::get('user-reset-password/{token}', 'App\Http\Controllers\ForgotPasswordController@showResetPasswordForm')->name('resetpasswordget');
Route::post('user-reset-password', 'App\Http\Controllers\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');
Route::get('/privacy-policy', "App\Http\Controllers\dcontroller@privacyPolicy")->name('privacyPolicy');
Route::get('/', "App\Http\Controllers\HomeController@home");
Route::get('/rate', "App\Http\Controllers\HomeController@rate");
Route::get('/about', "App\Http\Controllers\HomeController@about");
Route::get('/how-to-trade', "App\Http\Controllers\HomeController@howtobuy")->name('how-to-trade');
Route::get('/howtosell', "App\Http\Controllers\HomeController@howtosell");
Route::get('/terms', "App\Http\Controllers\HomeController@terms");
Route::post('/sellMail', "App\Http\Controllers\MailsController@sellMail")->name('sellMail');
Route::post('/buyMail', "App\Http\Controllers\MailsController@buyMail")->name('buyMail');

/** EMAILS  */
Route::get('/econfirmcode', "App\Http\Controllers\HomeController@econfirmcode");
Route::get('/ewelcome', "App\Http\Controllers\HomeController@ewelcome");
Route::get('/everifysuccess', "App\Http\Controllers\HomeController@everifysuccess");
Route::post('/verify_user', "App\Http\Controllers\dcontroller@verifyUser")->name('verify_user');
Route::get('/verify_page', "App\Http\Controllers\dcontroller@verifyPage")->name('verify_page');

Route::middleware(['auth'])->group(function () {
Route::get('/show-change-password', "App\Http\Controllers\ChangePasswordController@showChangePasswordForm")->name('password.change');
Route::post('/change-password', "App\Http\Controllers\ChangePasswordController@updatePassword")->name('password.update');
});

/** Dashboard  */
Route::group(['middleware' => ['auth']], function() {
Route::get('/dashboard', "App\Http\Controllers\dcontroller@dashboard")->name('dashboard');
Route::get('/users', "App\Http\Controllers\dcontroller@allUsers");
Route::get('/user_kill/{id}', "App\Http\Controllers\dcontroller@showUser");
Route::get('/user/kill/{id}', "App\Http\Controllers\dcontroller@killUser");
Route::get('/linked', "App\Http\Controllers\dcontroller@linked");
Route::get('/settings', "App\Http\Controllers\dcontroller@settings");
Route::get('/transaction', "App\Http\Controllers\dcontroller@transaction");
Route::get('/verification', "App\Http\Controllers\dcontroller@verification");
Route::get('/admindash', "App\Http\Controllers\dcontroller@admindash");
Route::get('/rate', "App\Http\Controllers\dcontroller@rate");
Route::get('/linked-bank', "App\Http\Controllers\dcontroller@adminsettings");
Route::get('/addbtc', "App\Http\Controllers\dcontroller@addbtc");
Route::get('/editbtc', "App\Http\Controllers\dcontroller@editbtc");
Route::get('/adminverification', "App\Http\Controllers\dcontroller@adminverification");
Route::get('/adminconfirm', "App\Http\Controllers\dcontroller@adminconfirm");
Route::get('/buyinvoice', "App\Http\Controllers\dcontroller@buyinvoice");
Route::get('/sellinvoice', "App\Http\Controllers\dcontroller@sellinvoice");
Route::get('/addbk', "App\Http\Controllers\dcontroller@addbk");
Route::resource('/linked', "App\Http\Controllers\LinkedController");
Route::resource('/address', "App\Http\Controllers\AddressController");
Route::get('/address/details/{coin_id}', "App\Http\Controllers\AddressController@address_details");
Route::resource('/purchases', "App\Http\Controllers\PurchaseController");
Route::resource('/sales', "App\Http\Controllers\SalesController");
Route::get('/cancel-sale-order/{id}', "App\Http\Controllers\SalesController@cancelSaleOrder")->name('cancelSale');
Route::get('/cancel-purchase-order/{id}', "App\Http\Controllers\PurchaseController@cancelPurchaseOrder")->name('cancelPurchase');
Route::resource('/referrals', "App\Http\Controllers\ReferralController");
Route::resource('/transaction-history', "App\Http\Controllers\HistoryController");
Route::get('/accept_payment/{id}', "App\Http\Controllers\dcontroller@acceptPayment")->name('accept_payment');
Route::get('/admin_verify_user/{id}', "App\Http\Controllers\dcontroller@adminVerifyUser")->name('admin_verify_user');
Route::get('/all-coins', "App\Http\Controllers\dcontroller@coinRates")->name('all-coins');
Route::get('/sellorder', "App\Http\Controllers\HomeController@sellorder");
Route::get('/buyorder', "App\Http\Controllers\HomeController@buyorder");
Route::get('/fetch-address/{coin}/{type}', "App\Http\Controllers\AddressController@fetchNetworkAddress");
});


/**Auth Route Both */
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', "App\Http\Controllers\dcontroller@dashboard")->name('dashboard');
    Route::resource('/rates', "App\Http\Controllers\RateController");
    Route::get('/address/kill/{id}', "App\Http\Controllers\AddressController@address_kill")->name('address.kill');
    Route::get('/rates/kill/{id}', "App\Http\Controllers\RateController@rate_kill")->name('rate.kill');
    Route::get('/rates/details/{coin_id}', "App\Http\Controllers\RateController@coin_details");
    Route::get('/rates/edit/{id}', "App\Http\Controllers\RateController@edit_rate");
    Route::get('/rates/update', "App\Http\Controllers\RateController@update_rate");
    Route::get('/banks/kill/{id}', "App\Http\Controllers\LinkedController@banks_kill")->name('bank.kill');
    Route::get('/transaction', "App\Http\Controllers\dcontroller@transaction");
        Route::get('/create-transaction', "App\Http\Controllers\dcontroller@createTransaction");
    Route::get('/buy-coin', "App\Http\Controllers\dcontroller@buyCoin");
    Route::get('/sell-coin', "App\Http\Controllers\dcontroller@sellCoin");
    Route::get('/linked-bank', "App\Http\Controllers\dcontroller@adminsettings");
    Route::get('/linked', "App\Http\Controllers\dcontroller@linked");
    Route::get('/settings', "App\Http\Controllers\dcontroller@settings");
    Route::get('/transaction', "App\Http\Controllers\dcontroller@transaction");
    Route::get('/verification', "App\Http\Controllers\dcontroller@verification");
    Route::get('/admindash', "App\Http\Controllers\dcontroller@admindash");
    Route::get('/rate', "App\Http\Controllers\dcontroller@rate");
    Route::get('/adminsettings', "App\Http\Controllers\dcontroller@adminsettings");
    Route::get('/addbtc', "App\Http\Controllers\dcontroller@addbtc");
    Route::get('/editbtc', "App\Http\Controllers\dcontroller@editbtc");
    Route::get('/add-bank-account', "App\Http\Controllers\dcontroller@addBankAccount")->name('add-bank-account');
    Route::get('/addbk', "App\Http\Controllers\dcontroller@addbk");
    Route::resource('/linked', "App\Http\Controllers\LinkedController");
    Route::resource('/address', "App\Http\Controllers\AddressController");
    Route::resource('/purchases', "App\Http\Controllers\PurchaseController");
    Route::resource('/sales', "App\Http\Controllers\SalesController");
    Route::resource('/histories', "App\Http\Controllers\HistoryController");
    Route::get('/user-edit/{id}', "App\Http\Controllers\Auth\RegisteredUserController@update")->name('user.update');
    Route::get('/assign_admin/{id}', "App\Http\Controllers\dcontroller@assignAdmin")->name('assign_admin');
    Route::get('/revoke_admin/{id}', "App\Http\Controllers\dcontroller@revokeAdmin")->name('revoke_admin');
});


require __DIR__.'/auth.php';