<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelDemoFormController;
use App\Http\Controllers\ControllerTutorial;
use App\Http\Controllers\DemoResourceController;
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

Route::get('/model-demo', [ModelDemoFormController::class, 'index'])->name('customer.new');
Route::post('/model-demo', [ModelDemoFormController::class, 'storeData']);
Route::get('/customer/view', [ModelDemoFormController::class, 'view'])->name('customer.view');
Route::get('/customer/delete/{id}', [ModelDemoFormController::class, 'deleteData'])->name('customer.delete');

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
