<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('users', UserController::class);

$router->resource('services', ServiceController::class);
$router->resource('passports', PassportController::class);

$router->resource('submitted-forms', SubmittedFormController::class);

$router->resource('visa-applications', VisaApplicationController::class);
$router->resource('company-registrations', CompanyRegistrationController::class);
$router->resource('citizenship-applications', CitizenshipApplicationController::class);
$router->resource('civil-registrations', CivilRegistrationController::class);
$router->resource('national-i-ds', NationalIDController::class);
});
