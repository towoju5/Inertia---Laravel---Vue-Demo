<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    auth()->login(User::find(1));
    // return auth()->check();
    return inertia('Home');
});

Route::group(['prefix' => 'investment'], function() {
    Route::get('/',     [OrderController::class, 'index']);
    Route::get('/new',   [OrderController::class, 'create']);
});

Route::group(['prefix' => 'profile', 'middlware' => ['auth']], function() {
    Route::get('/',     [ProfileController::class, 'index']);
    Route::get('edit',      [ProfileController::class, 'edit']);
    Route::post('update',   [ProfileController::class, 'update']);
});

Route::post('logout', [HomeController::class, 'logout']);
















Route::fallback(function(){
    // return page not found..
    return inertia('error/404');
});

// Route::get('users', function () {
//     return inertia('Users/Index', [
//         'users' => User::query()
//         ->when(request('search'), function($query, $search) {
//             $query->where('name', 'like', "%{$search}%");
//         })
//         ->paginate(10)
//         ->withQueryString()
//         ->through(fn($user) => [
//             'id' => $user->id,
//             'name' => $user->name
//         ]),
//         "filters" => request()->only(['search']),
//     ]);
// });

// Route::get('user/create', function(){
//     return inertia('Users/Create');
// });

// Route::post('users', function(){
//     $attr = Request::validate([
//         'email'     => 'required',
//         'name'      =>  'required',
//         'password'  => 'required'
//     ]);

//     User::create($attr);

//     return redirect('users');
// });

// Route::get('settings', function () {
//     return inertia('Settings');
// });

// Route::post('logout', function() {
//     return "loggint the user out";
// });