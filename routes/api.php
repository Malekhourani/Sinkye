<?php

use App\Models\Company;
use App\Repository\IRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('company', function(IRepository $repo){
//     return $repo->all();
// });

// Route::get('company/{id}', function (IRepository $repo, int $id) {
//     return $repo->read($id);
// });

// Route::post('company', function (IRepository $repo, Request $req) {
//     return $repo->store($req, [
//         'name' => 'required'
//     ]);
// });

// Route::put('company/{id}', function (IRepository $repo, Request $req) {
//     return $repo->update($req);
// });

// Route::delete('company/{id}', function (IRepository $repo, int $id) {
//     return $repo->destroy($id);
// });


Route::get('company', function (IRepository $repo) {
    return $repo->all();
});

Route::post('company', function (IRepository $repo) {
    $repo->store(request(), ['name' => 'required']);
});

Route::put('company/{id}', function (IRepository $repo, $id) {
    return $repo->update(request(), $id);
});

Route::delete('company/{id}', function (IRepository $repo, $id) {
    $repo->destroy($id);
});

Route::get('company/{id}', function (IRepository $repo, $id) {
    return $repo->read($id);
});


