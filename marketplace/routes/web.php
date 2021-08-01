<?php

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

//use Illuminate\Support\Facades\Route;

Route::get('/', function () {

//    $user = \App\User::find(10);
//    $store = $user->store()->create([
//        'name' => 'Loja Teste',
//        'description' => 'Loja teste de produtos',
//        'mobile_phone' => 'XX-XXXX-XXXX',
//        'phone' => 'XX-XXXX-XXXX',
//        'slug' => 'loja-teste'
//    ]);
//
//    $products = $store->products()->create([
//        'name' => 'Notebook Dell',
//        'description' => 'Core i5 10GB',
//        'body' => 'qualquer coisa! ,, !',
//        'price' => 2999.90,
//        'slug' => 'notebook-dell',
//    ]);
//
//    $category = \App\Category::create([
//        'name' => 'Games',
//        'description' => null,
//        'slug' => 'games'
//    ]);
//
//    $category = \App\Category::create([
//        'name' => 'Notebooks',
//        'description' => null,
//        'slug' => 'notebooks'
//    ]);

    // Adicionar um produto para uma categoria ou vice-versa

    /**
     * Attach;
     * Detach;
     * Sync (vai sempre deixar a tabela igual ao array passado no parâmetro).
     */

//    $product = \App\Product::find(49);
//    dd($product->categories()->sync([3]));


    return view('welcome');
});



Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

        // Isso tudo é substituído pelo Route::resource
//        Route::prefix('stores')->name('stores.')->group(function(){
//            Route::get('/', 'StoreController@index')->name('index');
//
//            Route::get('/create', 'StoreController@create')->name('create');
//
//            Route::post('/store', 'StoreController@store')->name('store');
//
//            Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
//
//            Route::post('/update/{store}', 'StoreController@update')->name('update');
//
//            Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
//        });

        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
 * #try_files $uri $uri/ /index.php?$query_string $uri/index.html;
    try_files $uri $uri/ /index.php?$args;
 * */


/*
 * Route::resource cria todas essas rotas:
 *
 * RESET Method | route | Controller method
 * GET - /products | index
 * GET - /products/10 | show
 * GET - /products/10/edit | edit
 * GET - /products/create | create
 * POST - /products | store
 * PUT ou PATCH - /product/10 | update
 * DELETE - /product/10 | destroy
 *
 */


