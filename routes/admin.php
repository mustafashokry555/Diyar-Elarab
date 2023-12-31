<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\InvestorController;
use App\Http\Controllers\Admin\CustomerReveiwController;
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
            Route::get('/setting', [SettingController::class, 'get'])->name('.pages.setting');
            Route::post('/settingt', [SettingController::class, 'update'])->name('.pages.update_settings');
            Route::get('/Team', [TeamController::class, 'index'])->name('.pages.team');
            Route::get('/Team/Add', [TeamController::class, 'create'])->name('.pages.team.add');
            Route::post('/Team/Store', [TeamController::class, 'store'])->name('.pages.team.store');
            Route::get('/Team/Edit/{team_id}', [TeamController::class, 'edit'])->name('.pages.team.edit');
            Route::post('/Team/Update/{team_id}', [TeamController::class, 'update'])->name('.pages.team.update');
            Route::get('/Team/Delete/{team_id}', [TeamController::class, 'destroy'])->name('.pages.team.destroy');
            Route::get('/Investor', [InvestorController::class, 'index'])->name('.pages.investor');
            Route::get('/Investor/Add', [InvestorController::class, 'create'])->name('.pages.investor.add');
            Route::post('/Investor/Store', [InvestorController::class, 'store'])->name('.pages.investor.store');
            Route::get('/Investor/Edit/{investor_id}', [InvestorController::class, 'edit'])->name('.pages.investor.edit');
            Route::post('/Investor/Update/{investor_id}', [InvestorController::class, 'update'])->name('.pages.investor.update');
            Route::get('/Investor/Delete/{investor_id}', [InvestorController::class, 'destroy'])->name('.pages.investor.destroy');
            Route::get('/Customer_Review', [CustomerReveiwController::class, 'index'])->name('.pages.customer_review');
            Route::get('/Customer_Review/Add', [CustomerReveiwController::class, 'create'])->name('.pages.Customer_review.add');
            Route::post('/Customer_Review/Store', [CustomerReveiwController::class, 'store'])->name('.pages.Customer_review.store');
            Route::get('/Customer_Review/active/{customer_id}', [CustomerReveiwController::class, 'active'])->name('.pages.Customer_review.active');
            Route::get('/Customer_Review/not active/{customer_id}', [CustomerReveiwController::class, 'not_active'])->name('.pages.Customer_review.notactive');


            // Route::get('/Customer_Review/Edit/{team_id}', [CustomerReveiwController::class, 'edit'])->name('.pages.Customer_review.edit');
            // Route::post('/Customer_Review/Update/{team_id}', [CustomerReveiwController::class, 'update'])->name('.pages.Customer_review.update');
            Route::get('/Customer_Review/Delete/{team_id}', [CustomerReveiwController::class, 'destroy'])->name('.pages.Customer_review.destroy');



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

