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


//Route Optional 3 parameter

 Route::get('pesanan/{makanan?}/{minum?}/{harga?}',function($makan=null,$minum=null,$harga=null) {
 	if (isset($makan)) {
 	    echo 'Anda Memesan '.$makan;
 	} if (isset($minum)) {
 		echo ' Dan '.$minum;
 	} if (isset($harga)) {
 		echo ' Dengan Harga '.$harga;
 	} if ($makan == null && $minum == null && $harga == null) {
 		echo 'Anda Belum Memesan.';
 	}

});

 //testmodel
 // • Mencari semua model:
 Route::get('/testmodel', function() 
 	{
 	 $query = App\Post::all();
     return $query;
});

 //• Mencari model berdasarkan id:

 Route::get('/testmodel1', function() 
 	{
 	 $query = App\Post::find(1);
     return $query;
});
   
 // • Mencari model berdasarkan title
  Route::get('/testmodel2', function() 
 	{
 	 $query = App\Post::where('title','like','%cepat nikah%')->get();
     return $query;
});

  //• Mengubah record, (hapus semua isi function) :
Route::get('/testmodel3', function() 
 	{
 	 $query = App\Post::find(1); 
 	 $query->title = "Ciri Keluarga Sakinah"; 
 	 $query->save(); 
 	 return $query;		
});

Route::get('/testmodel4', function() 
 	{
 	$query = App\Post::find(1); 
 	$query->delete(); 
});

Route::get('/testmodel5', function() 
 	{
 	$query= new App\Post;
 	$query->title = "7 Amalan Pembuka Jodoh"; 
 	$query->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat"; 
 	$query->save(); 
 	return $post; 
});
//
Route::get('/gaji', function() 
 	{
 	 $query = App\penggajian::all();
     return $query;
});

Route::get('/gaji1', function() 
 	{
 	 $query = App\penggajian::where('agama','=','islam')->get();
     return $query;
});

Route::get('/gaji2', function() 
 	{
 	 $query = App\penggajian::where('id','nama','agama')
 	 ->where('agama','=','islam')
 	 ->get();
     return $query;
});

Route::get('/gaji/{id}', function($id) 
 	{
 	 $query = App\penggajian::find($id);
     return $query;
});

Route::get('tambah-data-gaji',function()
{
	$query = new App\penggajian();
	$query->nama='syifa';
	$query->jabatan='Sekretaris';
	$query->jk ='Perempuan';
	$query->alamat='Caringin';
	$query->agama='Islam';
	$query->total_gaji='700000';
	$query->save();
	return $query;
});

Route::get('hallo','SekolahController@hallo');
Route::get('world','SekolahController@dunia');

Route::get('dunia1','SekolahController@dunia1');
Route::get('dunia2','SekolahController@dunia2');
Route::get('dunia3','SekolahController@dunia3');
Route::get('dunia4','SekolahController@dunia4');
Route::get('dunia5','SekolahController@dunia5');
Route::get('dunia6','SekolahController@dunia6');
Route::get('dunia7','SekolahController@dunia7');
Route::get('dunia8','SekolahController@dunia8');
Route::get('dunia9','SekolahController@dunia9');
Route::get('dunia10','SekolahController@dunia10');

Route::get('warnakucing/{warna}','SekolahController@jeniskucing');
Route::get('warteg/{beli?}','SekolahController@warteg');

Route::get('beli/{makanan?}/{harga?}', 'SekolahController@beli');

