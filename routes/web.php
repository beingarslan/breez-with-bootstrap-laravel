<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UiController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\MonthlyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnuallyController;
use App\Http\Controllers\OrderNewController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\AccountNewController;
use App\Http\Controllers\OrderShippedController;
use App\Http\Controllers\OrderReturnedController;
use App\Http\Controllers\AccountProfileController;
use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\OrderProcessedController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/update', [UpdateController::class, 'index'])->name('update');

Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::get('/overview', [OverviewController::class, 'index'])->name('overview');
Route::get('/weekly', [WeeklyController::class, 'index'])->name('weekly');
Route::get('/monthly', [MonthlyController::class, 'index'])->name('monthly');
Route::get('/annually', [AnnuallyController::class, 'index'])->name('annually');
Route::get('/order/new', [OrderNewController::class, 'index'])->name('order_new');
Route::get('/order/processed', [OrderProcessedController::class, 'index'])->name('order_processed');
Route::get('/order/shipped', [OrderShippedController::class, 'index'])->name('order_shipped');
Route::get('/order/returned', [OrderReturnedController::class, 'index'])->name('order_returned');
Route::get('/account/new', [AccountNewController::class, 'index'])->name('account_new');
Route::get('/account/profile', [AccountProfileController::class, 'index'])->name('account_profile');
Route::get('/account/setting', [AccountSettingController::class, 'index'])->name('account_setting');

require __DIR__ . '/auth.php';
