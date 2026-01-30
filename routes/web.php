<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\ProfileController;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = BlogPost::with('category')->get();
    // جلب كل الكاتيجوريات اللي فعليًا موجودة في المنتجات
    $categories = $products->pluck('category')->unique('id')->filter();

    // تجهيز JSON للـ JS
    $productData = $products->map(function ($p) {
        return [
            'id'        => $p->id,
            'cat'       => $p->category->name_en ?? 'other',
            'nameAr'    => $p->title_ar,
            'nameEn'    => $p->title_en,
            'wholesale' => $p->wholesale_price,
            'retail'    => $p->sale_price,
            'img'       => $p->image ? asset('storage/' . $p->image) : null,
        ];
    });

    return view('welcome', compact('productData', 'categories'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/blog/create', [\App\Http\Controllers\Admin\BlogController::class, 'create'])
        ->name('admin.blog.create');

    Route::post('/blog/store', [\App\Http\Controllers\Admin\BlogController::class, 'store'])
        ->name('admin.blog.store');

    Route::get('/blogs', [\App\Http\Controllers\Admin\BlogController::class, 'index'])
        ->name('admin.blog.index');

    Route::get('/blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'edit'])
        ->name('admin.blog.edit');

    Route::post('/blog/update/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'update'])
        ->name('admin.blog.update');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('blog', BlogController::class);
});


Route::get('/blog', [BlogController::class, 'indexp'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
});





require __DIR__ . '/auth.php';
