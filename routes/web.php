<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;

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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin all Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/edit/profile', 'editProfile')->name('edit.profile');
    Route::post('/store/profile', 'storeProfile')->name('store.profile');
    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'updatePassword')->name('update.password');
});

// Home Slide All Route
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'homeSlide')->name('home.slide');
    Route::post('/update/slide', 'updateSlide')->name('update.slide');
});

// Home About All Route
Route::controller(AboutController::class)->group(function () {
    Route::get('/home/about', 'homeAbout')->name('home.about');
    Route::post('/update/about', 'updateAbout')->name('update.about');
    Route::get('/about', 'about')->name('about.page');
    Route::get('/about/multi/image', 'aboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'storeMutliImage')->name('store.multi.image');
    Route::get('/all/multi/image', 'allMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'editMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image', 'updateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'deleteMultiImage')->name('delete.multi.image');
    Route::get('/home/resume/', 'homeResume')->name('home.resume');
    Route::post('/store/resume/', 'storeResume')->name('store.resume');
});

// Home Portfolio all Route
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/home/portfolio', 'homePortfolio')->name('home.portfolio');
    Route::get('/home/add/portfolio', 'homeAddPortfolio')->name('home.add.portfolio');
    Route::post('/store/portfolio', 'storePortfolio')->name('store.portfolio');
    Route::get('/edit/portfolio/{id}', 'editPortfolio')->name('edit.portfolio');
    Route::post('/update/portfolio', 'updatePortfolio')->name('update.portfolio');
    Route::get('/delete/portfolio/{id}', 'deletePortfolio')->name('delete.portfolio');
    Route::get('/details/portfolio/{id}', 'detailsPortfolio')->name('details.portfolio');
});

// Home Blog Category All Route
Route::controller(BlogCategoryController::class)->group(function () {
    Route::get('/home/blog/category', 'homeBlogCategory')->name('home.blog.category');
    Route::get('/add/blog/category', 'addBlogCategory')->name('add.blog.category');
    Route::post('/store/blog/category', 'storeBlogCategory')->name('store.blog.category');
    Route::get('/edit/blog/category/{id}', 'editBlogCategory')->name('edit.blog.category');
    Route::post('/update/blog/category/{id}', 'updateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}', 'deleteBlogCategory')->name('delete.blog.category');
});

// Home Blog All Route
Route::controller(BlogController::class)->group(function () {
    Route::get('/home/blog', 'homeBlog')->name('home.blog');
    Route::get('/add/blog', 'addBlog')->name('add.blog');
});


// Profile Authedication Route
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';