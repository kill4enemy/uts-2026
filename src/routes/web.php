<?php
use App\Models\Profile;
use App\Models\Portfolio;
use App\Models\ProjectReport;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\ContactController;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', function () {
    return view('portfolio.index', [
        'profile' => Profile::latest()->first(),
        'mainReport' => ProjectReport::where('type', 'main')->first(),
        'reportTasks' => ProjectReport::where('type', 'task')->latest()->get(),
        'portfolios' => Portfolio::latest()->get(),
    ]);
});
Route::view('/projects', 'portfolio.projects');
Route::view('/blog', 'portfolio.blog');
Route::view('/case-study', 'portfolio.case-study');
Route::view('/blog-article', 'portfolio.blog-article');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');