<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
});
Route::get('about-us', function () {
    return view('about-us');
});
Route::get('all-posts', function () {
    $posts = Post::all();  // Ini mengembalikan koleksi objek
    return view('all-posts', compact('posts'), ['title' => 'All Posts', 'posts' => [
        [
            'title' => 'About Stock',
            'blog' => 'NASDAQ: Nvidia, have a bitcoin, dead',
            'author' => 'Iqbal Adiatma',
            'postingan' => 'Buy Stock from Magnificent Seven Company and get dividends. Don\'t forget to buy crypto assets either.'
        ],
        [
            'title' => 'Tech Future',
            'blog' => 'AI and Quantum Computing',
            'author' => 'Robert Downey Jr.',
            'postingan' => 'The future of technology is driven by AI and quantum computing. Invest early to get the advantage.'
        ]
    ]]);
});

Route::get('postals', function () {
    return view('postals', ['title' => 'All Posts', 'posts' => [
        [
            'title' => 'About Stock',
            'category' => 'Investment',
            'blog' => 'NASDAQ: Nvidia, have a bitcoin, dead',
            'author' => 'Iqbal Adiatma',
            'isi-postingan' => 'Buy Stock from Magnificent Seven Company and get dividends. Don\'t forget to buy crypto assets either.'
        ],
        [
            'title' => 'Tech Future',
            'category' => 'Investment',
            'blog' => 'AI and Quantum Computing',
            'author' => 'Robert Downey Jr.',
            'postingan' => 'The future of technology is driven by AI and quantum computing. Invest early to get the advantage.'
        ]
    ]]);
});
Route::resource('posts', controller: \App\Http\Controllers\PostController::class,);
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
// Route::resource('posts', controller: \App\Http\Controllers\PostController::class);
// Route::get('todos/{todo}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
