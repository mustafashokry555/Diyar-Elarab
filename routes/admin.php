<?php

use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PropertyController;
use App\Models\HomePage;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Admin', 'as' => 'admin'], function () {

    // Auth Routes
    Route::middleware(['guest'])->group(function () {
        
        Route::get('login', function () {
            return view('admin.auth.login');
        })->name('.login');

        Route::get('forgotPassword', function () {
            return view('admin.auth.forgot_password');
        })->name('.forgotPassword');

    });

    // Admin Routes
    Route::middleware(['auth', 'admin'])->group(function () {
        
        // admin Home Page
        Route::get('/', [HomeController::class, 'index']);

        // website Pages Routes
        Route::prefix('pages')->group(function () {

            //website Home Pages
            Route::get('/home', [HomePageController::class, 'index'])->name('.pages.home');
            Route::get('/home/editSlider/{id}', [HomePageController::class, 'editSlider'])->name('.pages.home.editSlider');
            Route::post('/home/updateSlider/{id}', [HomePageController::class, 'updateSlider'])->name('.pages.home.updateSlider');
            Route::get('/home/editServes/{id}', [HomePageController::class, 'editServes'])->name('.pages.home.editServes');
            Route::post('/home/updateServes/{id}', [HomePageController::class, 'updateServes'])->name('.pages.home.updateServes');
        
        });

        //website Projrcts
        Route::get('/projects', [ProjectController::class, 'index'])->name('.projects');
        Route::get('/projects/add', [ProjectController::class, 'add'])->name('.addProject');
        Route::post('/projects/store', [ProjectController::class, 'store'])->name('.storeProject');
        Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('.editProject');
        Route::post('/projects/update/{id}', [ProjectController::class, 'update'])->name('.updateProject');
        Route::post('/projects/delete/{id}', [ProjectController::class, 'delete'])->name('.deleteProject');

        //website Categories
        Route::get('/categories', [CatController::class, 'index'])->name('.cats');
        Route::get('/category/add', [CatController::class, 'add'])->name('.addCat');
        Route::post('/category/store', [CatController::class, 'store'])->name('.storeCat');
        Route::get('/category/edit/{id}', [CatController::class, 'edit'])->name('.editCat');
        Route::post('/category/update/{id}', [CatController::class, 'update'])->name('.updateCat');
        Route::post('/category/delete/{id}', [CatController::class, 'delete'])->name('.deleteCat');

        //website Properties
        Route::get('/properties', [PropertyController::class, 'index'])->name('.properties');
        Route::get('/property/add', [PropertyController::class, 'add'])->name('.addProperty');
        Route::post('/property/store', [PropertyController::class, 'store'])->name('.storeProperty');
        Route::get('/property/edit/{id}', [PropertyController::class, 'edit'])->name('.editProperty');
        Route::post('/property/update/{id}', [PropertyController::class, 'update'])->name('.updateProperty');
        Route::post('/property/delete/{id}', [PropertyController::class, 'delete'])->name('.deleteProperty');
    });
});

