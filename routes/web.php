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
Route::group(['middleware' => ['web', 'auth', 'roles']],function(){
   
        Route::get('/', 'PsksController@admindashboard')->name('dashboard');

        Route::get('/dashboard', 'PsksController@admindashboard')->name('dashboard');

        Route::get('/inputdatapsks', function () {
            return view('Admin.inputdatapsks');
        })->name('inputdatapsks');

        Route::get('/tambahpsks', 'PsksController@tambahpsks')->name('tambahpsks');

        Route::get('/tabeldatapsks', 'PsksController@psks')->name('tabeldatapsks');

        Route::get('/editpsks', 'PsksController@editpsks')->name('editpsks');

        Route::get('/updatepsks/{NikPSKS}', 'PsksController@updatepsks')->name('updatepsks');
        
        Route::get('/inputjenispsks', function () {
            return view('Admin.inputjenispsks');
        })->name('inputjenispsks');

        Route::get('/hapusPsks/{NikPSKS}', 'PsksController@hapusPsks')->name('hapusPsks');
         Route::get('/tambahjenispsks', 'PsksController@tambahjenispsks')->name('tambahjenispsks');

        Route::get('/tabeljenispsks', 'PsksController@jenispsks')->name('tabeljenispsks');

        Route::get('/editjenispsks', 'PsksController@editjenispsks')->name('editjenispsks');

        Route::get('/updatejenispsks/{KodeJenisPsks}', 'PsksController@updatejenispsks')->name('updatejenispsks');

        Route::get('/hapusJenisPsks/{KodeJenisPsks}', 'PsksController@hapusJenisPsks')->name('hapusJenisPsks');

        Route::get('/tabeladmindiklat', 'PsksController@admindiklat')->name('tabeladmindiklat');

        Route::get('/tabeladminkeluargaterdamping', 'PsksController@adminkeluargaterdamping')->name('tabeladminkeluargaterdamping');

        Route::get('/tabelhakakses','PsksController@hakakses')->name('tabelhakakses');

        Route::get('/edithakakses','PsksController@edithakakses')->name('edithakakses');

        Route::get('/updatehakakses/{id}', 'PsksController@updatehakakses')->name('updatehakakses');

        Route::get('/hapushakakses/{id}', 'PsksController@hapushakakses')->name('hapushakakses');


        Route::get('/loginn',function(){
            return view('loginn');
        })->name('login');

        Route::get('/registerr',function(){
            return view('registerr');
        })->name('regsiter');
   
    //endrouteadmin

    //routeuser
  
        Route::get('/inputdiklat', function () {
            return view('User.inputdiklat');
        })->name('inputdiklat');


        Route::post('/tambahdiklat', 'PsksController@tambahdiklat')->name('tambahdiklat');

        Route::get('/tabeldiklat', 'PsksController@diklat')->name('tabeldiklat');

        Route::get('/editdiklat', 'PsksController@editdiklat')->name('editdiklat');

        Route::post('/updatediklat/{KodeDiklat}', 'PsksController@updatediklat')->name('updatediklat');

        Route::get('/hapusDiklat/{KodeDiklat}', 'PsksController@hapusDiklat')->name('hapusDiklat');



        Route::get('/inputkeluargaterdamping', 'PsksController@inputkeluargaterdamping')->name('inputkeluargaterdamping');

        // Route::get('/caridatakeluarga', 'PsksController@caridatakeluarga')->name('caridatakeluarga');

        // Route::get('/inputkeluargaterdamping', function () {
        //     return view('inputkeluargaterdamping');
        // })->name('inputkeluargaterdamping');

        Route::post('inputkeluargaterdamping/fetch', 'PsksController@fetch')->name('inputkeluargaterdamping.fetch');

        Route::get('/tambahkeluargaterdamping', 'PsksController@tambahkeluargaterdamping')->name('tambahkeluargaterdamping');

        Route::get('/tabelkeluargaterdamping', 'PsksController@keluargaterdamping')->name('tabelkeluargaterdamping');

        Route::get('/detailkeluarga','PsksController@detailkeluarga')->name('detailkeluarga');

        Route::get('/editkeluargaterdamping', 'PsksController@editkeluargaterdamping')->name('editkeluargaterdamping');

        Route::get('/updatekeluargaterdamping/{KodeKeluarga}', 'PsksController@updatekeluargaterdamping')->name('updatekeluargaterdamping');

        Route::get('/hapusKeluargaTerdamping/{KodeKeluarga}', 'PsksController@hapusKeluargaTerdamping')->name('hapusKeluargaTerdamping');

        Route::get('/prosesAll/{IDBDT}',  'PsksController@prosesAll')->name('prosesAll');

        Route::get('/identitaspsks', 'PsksController@identitaspsks')->name('inputidentitas');

        Route::get('/editidentitas','PsksController@editidentitas')->name('editidentitas');

       

       
   
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
