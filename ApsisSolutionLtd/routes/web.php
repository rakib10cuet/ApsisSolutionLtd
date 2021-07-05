<?php
use \App\Http\Livewire\AboutComponent;
use \App\Http\Livewire\Viewer\ViewerDashboardComponent;
use \App\Http\Livewire\Writer\WriterDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/',HomeComponent::class);
Route::get('/about',AboutComponent::class)->name('about');

Route::middleware(['auth:sanctum', 'verified','authAdmin'])->group(function (){
    Route::group(['prefix'=>'admin'],function (){
        Route::get('dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    });
});
Route::middleware(['auth:sanctum', 'verified','authWriter'])->group(function (){
    Route::group(['prefix'=>'writer'],function (){
        Route::get('dashboard',WriterDashboardComponent::class)->name('writer.dashboard');
    });
});
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::group(['prefix'=>'viewer'],function (){
        Route::get('dashboard',ViewerDashboardComponent::class)->name('viewer.dashboard');
    });
});
