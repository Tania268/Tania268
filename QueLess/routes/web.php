<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TradingLicenceController;
use App\Http\Controllers\VisaApplicationController;
use App\Http\Controllers\CivilRegistrationController;
use App\Http\Controllers\CitizenshipApplicationController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\NationalIDController;
use App\Http\Controllers\CompanyRegistrationController;
use App\Admin\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('auth.google');

Route::get('/auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');


Route::middleware(['auth'])->group(function () {
    Route::get('/service/trading-licence', [ServiceController::class, 'licenceRegistration'])->name('service.licence_registration');
    Route::get('/service/visa_application', [ServiceController::class, 'visaApplication'])->name('service.visa_application');
    Route::get('/service/refugee_asylum', [ServiceController::class, 'refugeeAsylum'])->name('service.refugee_asylum');
    Route::get('/service/passport', [ServiceController::class, 'passport'])->name('service.passport');
    Route::get('/service/civil_registration', [ServiceController::class, 'civilRegistration'])->name('service.civil_registration');
    Route::get('/service/identity_cards', [ServiceController::class, 'identityCards'])->name('service.identity_cards');
    Route::get('/service/citizenship', [ServiceController::class, 'citizenship'])->name('service.citizenship');
    Route::get('/service/company_registration', [ServiceController::class, 'companyRegistration'])->name('service.company_registration');
    Route::get('/service/trading_licence', [ServiceController::class, 'tradingLicence'])->name('service.trading_licence');
    Route::get('/service/work_permits', [ServiceController::class, 'workPermits'])->name('service.work_permits');
    Route::get('/service/vehicle_licence', [ServiceController::class, 'vehicleLicence'])->name('service.vehicle_licence');
    Route::get('/service/birth_certificate', [ServiceController::class, 'birthCertificate'])->name('service.birth_certificate');
    Route::get('/service/private_ewsc', [ServiceController::class, 'privateEwsc'])->name('service.private_ewsc');
    Route::get('/service/private_enpf', [ServiceController::class, 'privateEnpf'])->name('service.private_enpf');
    Route::get('/service/private_eec', [ServiceController::class, 'privateEec'])->name('service.private_eec');
    Route::get('/service/private_pspf', [ServiceController::class, 'privatePspf'])->name('service.private_pspf');
});

Route::get('/services', function () {
    return view('services');
})->name('services');


Route::get('/trading-licence', [TradingLicenceController::class, 'showForm'])->name('trading.form');
Route::post('/trading-licence', [TradingLicenceController::class, 'submitForm'])->name('trading.submit');
Route::get('/download-trading-licence-form', [TradingLicenceController::class, 'downloadForm'])->name('trading.download');
Route::post('/upload-trading-licence-form', [TradingLicenceController::class, 'uploadForm'])->name('trading.upload');
Route::get('/view-uploaded-forms', [TradingLicenceController::class, 'viewUploadedForms'])->name('trading.view-uploads');
Route::get('/form', [TradingLicenceController::class, 'showForm'])->name('trading.form');
Route::post('/submit-form', [TradingLicenceController::class, 'submitForm'])->name('trading.submitForm');
Route::get('/view-uploads', [TradingLicenceController::class, 'viewSubmittedForms'])->name('trading.view-uploads');


Route::get('/trading/form', [TradingLicenceController::class, 'showForm'])->name('trading.form');
Route::post('/trading/form', [TradingLicenceController::class, 'submitForm'])->name('trading.submitForm');



Route::get('/visa-application', [VisaApplicationController::class, 'showForm'])->name('visa.application');
Route::post('/submit-visa-application', [VisaApplicationController::class, 'submitForm'])->name('visa.submitForm');
Route::get('/view-visa-applications', [VisaApplicationController::class, 'viewApplications'])->name('visa.view');


Route::get('/civil-registration', [CivilRegistrationController::class, 'index'])->name('civil.index');
Route::post('/submit-civil-registration', [CivilRegistrationController::class, 'submitForm'])->name('civil.submitForm');


Route::middleware('auth')->group(function () {
    Route::get('/citizenship-application', [CitizenshipApplicationController::class, 'showForm'])->name('citizenship.form');
    Route::post('/submit-citizenship-application', [CitizenshipApplicationController::class, 'submitForm'])->name('citizenship.submitForm');
    Route::get('/view-citizenship-applications', [CitizenshipApplicationController::class, 'viewApplications'])->name('citizenship.view');
});


Route::get('/passport', [PassportController::class, 'showForm'])->name('passport.form');
Route::post('/passport', [PassportController::class, 'submitForm'])->name('passport.submitForm');
Route::get('/passport/{id}', [PassportController::class, 'showDetails'])->name('passport.details');



Route::get('/nationalid', [NationalIDController::class, 'showForm'])->name('nationalid.form');
Route::post('/nationalid', [NationalIDController::class, 'submitForm'])->name('nationalid.submitForm');
Route::get('/nationalid/{id}', [NationalIDController::class, 'showDetails'])->name('nationalid.details');



Route::get('/company-registration', [CompanyRegistrationController::class, 'create'])->name('company_registration.create');
Route::post('/company-registration', [CompanyRegistrationController::class, 'store'])->name('company_registration.store');
Route::get('/company-registration/{companyRegistration}', [CompanyRegistrationController::class, 'show'])->name('company_registration.details');


Route::resource('visa_applications', VisaApplicationController::class)->middleware('admin');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/admin',[HomeController::class, 'index'])->name('admin.dashboard');
    // Other admin routes
});
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
});


use App\Http\Controllers\PaymentController;

Route::get('/payment{formId}', [PaymentController::class, 'showPaymentForm'])->name('payment');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment_process');
Route::get('/payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment_success');


