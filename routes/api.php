<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('v1')->group(function (){
    Route::get('/user', function (Request $request){
        return $request->user();
    });
    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);

});

Route::post('/api-register', [ UserAuthController::class, 'register']);
Route::post('/api-login', [ UserAuthController::class, 'login']);
Route::get('/authorize', [ UserAuthController::class, 'loginForm']);


Route::get('/redirect', function (Request $request) {
    //$request->session()->put('state', $state = Str::random(40));

    $query = http_build_query([
        'client_id' => 'client-id',
        'redirect_uri' => 'http://bookstore.test/api/v1/callback',
        'response_type' => 'code',
        'scope' => '',
        'state' => '$state',
        // 'prompt' => '', // "none", "consent", or "login"
    ]);

    return redirect('http://bookstore.test/oauth/authorize?'.$query);
});
