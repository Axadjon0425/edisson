<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceLearnMoreController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OurBlogController;
use App\Http\Controllers\GuestController;
use App\Models\Service;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [GuestController::class, 'index'])->name('index');

Auth::routes();
/**======================================== Guest =====================================**/
Route::get('/index', [GuestController::class, 'index'])->name('index');

Route::get('/aboutUs', [GuestController::class, 'aboutUs'])->name('aboutUs');

Route::get('/ourTeam', [GuestController::class, 'ourTeam'])->name('ourTeam');

Route::get('/services', [GuestController::class, 'service'])->name('service');

Route::get('/project', [GuestController::class, 'project'])->name('project');

Route::get('/contactUs', [GuestController::class, 'contactUs'])->name('contactUs');

Route::get('/clients', [GuestController::class, 'client'])->name('client');

Route::get('/OurBlogs', [GuestController::class, 'OurBlog'])->name('OurBlog');

/**======================================== Guest =====================================**/


/**======================================== Admin =====================================**/

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('admin/edit', [AdminController::class, 'edit'])->name('admin.edit');

Route::post('admin/password_update', [AdminController::class, 'password_update'])->name('admin.password_update');

/**======================================== Admin =====================================**/


/**======================================== Service =====================================**/

Route::get('service/', [ServiceController::class, 'index'])->name('service.index');

Route::get('service/add', [ServiceController::class, 'create'])->name('service.add');

Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');

Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');

Route::put('service/edit/{id}/update', [ServiceController::class, 'update'])->name('service.update');

Route::delete('service/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

Route::get('service_learnMore/{id}', [ServiceLearnMoreController::class, 'index'])->name('service.learnMore');

/**======================================== Service =====================================**/




/**======================================== CLIENT =====================================**/

Route::get('/client', [ClientController::class, 'index'])->name('client.index');

Route::get('client/add', [ClientController::class, 'create'])->name('client.add');

Route::post('client/store', [ClientController::class, 'store'])->name('client.store');

Route::get('client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');

Route::put('client/edit/{id}/update', [ClientController::class, 'update'])->name('client.update');

Route::delete('client/destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');

/**======================================== CLIENT =====================================**/




/**======================================== Our Blog =====================================**/

Route::get('/our_blog', [OurBlogController::class, 'index'])->name('ourBlog.index');

Route::get('our_blog/add', [OurBlogController::class, 'create'])->name('ourBlog.add');

Route::post('our_blog/store', [OurBlogController::class, 'store'])->name('ourBlog.store');

Route::get('our_blog/edit/{id}', [OurBlogController::class, 'edit'])->name('ourBlog.edit');

Route::put('our_blog/edit/{id}/update', [OurBlogController::class, 'update'])->name('ourBlog.update');

Route::delete('our_blog/destroy/{id}', [OurBlogController::class, 'destroy'])->name('ourBlog.destroy');

/**======================================== Our blog =====================================**/


