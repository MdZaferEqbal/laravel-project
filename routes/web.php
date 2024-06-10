<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchNavBar;
use App\Http\Controllers\FileUploadDemo;
use App\Http\Controllers\CustomerProfile;
use App\Http\Controllers\ControllerTutorial;
use App\Http\Controllers\DemoResourceController;
use App\Http\Controllers\ModelDemoFormController;
use App\Http\Controllers\DemoFormSubmissionController;

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


Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404-page');
})->name('404.page');

Route::get('/404-return', function () {
    return redirect()->back();
})->name('404.return');

Route::get('/directives', function () {
    return view('blade-directives');
});

Route::get('/components', function () {
    return view('components');
});

Route::get('/database-migration', function () {
    return view('database-configuration-migration');
});

Route::get('/intro-models', function () {
    return view('models');
});

Route::get('/route-button-anchor', function () {
    return view('routing-buttons-anchor-methods');
});

Route::get('/delete-query-doc', function () {
    return view('delete-query-using-eloquent-orm');
})->name('delete.query.doc');

Route::get('/update-query-doc', function () {
    return view('update-query');
})->name('update.query.doc');

Route::get('/helpers', function () {
    return view('helpers-laravel');
})->name('helpers.doc');

Route::get('/accessors-mutators', function () {
    return view('accessors-mutators');
})->name('accessors.mutators.doc');

Route::get('/session-handling', function () {
    return view('session-handling');
})->name('session.handling.doc');

Route::get('/softdelete', function () {
    return view('softdelete');
})->name('softdelete.doc');

Route::get('/file-upload', function () {
    return view('file-upload');
})->name('file.upload.doc');

Route::get('/seeder-faker', function () {
    return view('seeder-faker');
})->name('database.seeder.faker.doc');

Route::get('/foreign-key-relation', function () {
    return view('foreign-key-realtion');
})->name('foreign.key.relation.doc');

Route::get('/middleware', function () {
    return view('middleware');
})->name('middleware.doc');

Route::get('/unauthorized', function () {
    return view('unauthorized');
})->name('unauthorized.page');

Route::get('/api-restful-api', function () {
    return view('api-restful-api');
})->name('api.restful.api.page');

Route::get('/users-data', function() { 
    return view('users-data'); 
})->name('users.data');

// Customer Sign Up Page Route
Route::get('/sign-up', [CustomerProfile::class, 'signUpIndex'])->name('sign.up');
// Customer Sign Up Route
Route::post('/sign-up', [CustomerProfile::class, 'signUp'])->name('customer.sign.up');
// Customer Sign In Page Route
Route::get('/sign-in', [CustomerProfile::class, 'signInIndex'])->name('sign.in');
// Customer Sign In Route
Route::post('/sign-in', [CustomerProfile::class, 'signIn'])->name('customer.sign.in');
// Customer Sign Out Page Route
Route::get('/sign-out', [CustomerProfile::class, 'signOut'])->name('sign.out');
// New Customer Data Route.

Route::get('/model-demo', [ModelDemoFormController::class, 'index'])->name('customer.new');
// Storing new customer data in database post route.
Route::post('/model-demo', [ModelDemoFormController::class, 'storeData'])->name('customer.store');
// Grouping all customer routes
Route::group(['prefix' => '/customer', 'middleware' => 'customer.loged.in'], function() {
    // All Customer Data view from Database Route.
    Route::get('view', [ModelDemoFormController::class, 'view'])->name('customer.view');
    // Customer Search Button Route
    Route::get('search', [ModelDemoFormController::class, 'view'])->name('search.customer');
    // Edit existing customer data Route.
    Route::get('edit/{id}', [ModelDemoFormController::class, 'editCustomer'])->name('customer.edit');
    // Updating customer data route.
    Route::post('update/{id}', [ModelDemoFormController::class, 'updateData'])->name('customer.update');
    // Moving the customer data to trash route.
    Route::get('trash/{id}/{page?}', [ModelDemoFormController::class, 'trashData'])->name('customer.trash');
    // Trashed customer data view page route.
    Route::get('view/trash', [ModelDemoFormController::class, 'trashView'])->name('customer.trash.view');
    // Restoring customer data route.
    Route::get('restore/{id}/{page?}', [ModelDemoFormController::class, 'restoreData'])->name('customer.restore');
    // Permanently deleting customer data.
    Route::get('delete/{id}/{page?}', [ModelDemoFormController::class, 'deleteData'])->name('customer.delete');
});

// File Upload Form Submission Route
Route::post('/file-upload', [FileUploadDemo::class, 'storeData'])->name('file.store');

// Page Search Button Route
Route::get('/search', [SearchNavBar::class, 'searchResult'])->name('search');

Route::get('/form', [DemoFormSubmissionController::class, 'index']);
Route::post('/form', [DemoFormSubmissionController::class, 'storeData']);

Route::get('/controllers', [ControllerTutorial::class, 'understandingControllerPage']);

Route::resource('/custom-uri', DemoResourceController::class );

Route::get('/{heading?}/{sub_heading?}', function($heading = null, $sub_heading = null) {
    $data = compact('heading', 'sub_heading');
    return view('blade-template')->with($data);
});

/*
|--------------------------------------------------------------------------
| Route Functions and Usage.
|--------------------------------------------------------------------------
| post: to store data
| get: url
| put: store/update
| patch: store/update
| delete: delete data
| any: selects the best allowed Route method. 
*/
