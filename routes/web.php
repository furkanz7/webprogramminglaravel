<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

// Varsayılan örnek
Route::get('/', function () {
    return view('welcome');
});

// Basit metin döndüren route
Route::get('/hello-mis', function () {
    return 'Hello from Management Information Systems!';
});

// HTTP Method örnekleri
Route::get('/articles', function () {
    return 'All articles listed.';
});
Route::post('/articles', function () {
    return 'New article stored.';
});
Route::put('/articles/{id}', function ($id) {
    return "Article {$id} updated.";
});
Route::delete('/articles/{id}', function ($id) {
    return "Article {$id} deleted.";
});
Route::patch('/articles/{id}/status', function ($id) {
    return "Status for article {$id} updated.";
});

// match ve any
Route::match(['get', 'post'], '/contact', function () {
    return 'Contact route with GET or POST.';
});
Route::any('/profile', function () {
    return 'Profile route handles any verb.';
});

// Parametreli route
Route::get('/users/{id}', function (string $id) {
    return 'Displaying profile for User ID: ' . $id;
});

// Çoklu parametre
Route::get('/posts/{postId}/comments/{commentId}', function (string $postId, string $commentId) {
    return "Viewing comment {$commentId} on post {$postId}.";
});

// Opsiyonel parametreler
Route::get('/users/{name?}', function (?string $name = null) {
    return $name ? "Displaying profile for {$name}" : "Displaying all users.";
});
Route::get('/greet/{name?}', function (?string $name = 'Guest') {
    return 'Hello, ' . $name;
});

// Controller bağlantıları
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

// Grup örnekleri
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/{id}', 'show')->name('users.show');
});

Route::prefix('admin')->group(function () {
    Route::get('/users', fn()=>'Admin users');
    Route::get('/posts', fn()=>'Admin posts');
    Route::get('/settings', fn()=>'Admin settings');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', fn()=>'Admin users')->name('users.index');
    Route::get('/posts', fn()=>'Admin posts')->name('posts.index');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');
    Route::controller(\App\Http\Controllers\Admin\UserController::class)
        ->prefix('users')->name('users.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::get('/{id}', 'show')->name('show');
        });
});
