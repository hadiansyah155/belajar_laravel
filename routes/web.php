<?php

Route::get('/',function() {
	return view('welcome');

	});

//Route basic
Route::get('/about', function () {
    return '<h1>Hallo</h1>'.
           'Selamat Datang Di Webapp Saya<br>'.
           'laravel,emang keren';
});
//biodata
Route::get('profil-1',function()
{
	return view('biodata-1');
});

Route::get('profil-2',function()
{
	return view('biodata-2');
});

Route::get('profil-3',function()
{
	return view('biodata-3');
});

Route::get('profil-4',function()
{
	return view('biodata-4');
});

Route::get('profil-5',function()
{
	return view('biodata-5');
});

// Route Parameter

Route::get('Pesan/{Makan}',function($mkn,$nama,$harga)
{
    return 'Makanan Yang Saya Pesan Adalah  '.$mkn.'<br>
            Minuman Yang Anda Pesan Adalah '.$nama.'<br>
            Total Harga Nya Menjadi '.$harga;

});

//Route optional parameter
 Route::get('Hallo/{nama?}',function($nama='Hadiansyah'){
 	return 'Hallo Nama Saya Adalah '.$nama;
 });




 