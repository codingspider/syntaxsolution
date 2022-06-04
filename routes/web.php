<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//frontend menus
Route::get('/', [HomeController::class, 'Home']);
Route::get('/analytics', [HomeController::class, 'GooAnalytics']);
Route::get('project/detail/{id}', [HomeController::class, 'ProjectDetail']);
Route::get('blog/detail/{id}', [HomeController::class, 'BlogDetail']);
Route::get('service/detail/{id}', [HomeController::class, 'ServiceDetail']);
Route::get('about-us', [HomeController::class, 'AboutUs']);
Route::get('features', [HomeController::class, 'Feature']);
Route::get('services', [HomeController::class, 'Service']);
Route::get('projects', [HomeController::class, 'Project']);
Route::get('teams', [HomeController::class, 'Team']);
Route::get('testimonial', [HomeController::class, 'Testimonial']);
Route::get('blogs', [HomeController::class, 'Blog']);
Route::get('faq', [HomeController::class, 'FAQ']);
Route::get('contact', [HomeController::class, 'Contact']);
Route::get('prices', [HomeController::class, 'Price']);
Route::get('page/{name}/{id}', [HomeController::class, 'StaticPage']);
Route::post('sent-contact-mail', [HomeController::class, 'SendContactMail']);
Route::post('subscribe', [HomeController::class, 'Subscribe']);
Route::get('test', [HomeController::class, 'test']);

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});