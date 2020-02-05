<?php

use App\Artikel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $no = 10;
        for ($i=0; $i < $no; $i++) { 
        $artikel = new Artikel();	
        $artikel->judul ='belajar pemograman ke-'.$i;
        $artikel->slug = Str::slug($artikel->judul,'-');
        $artikel->deskripsi = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.';
        $artikel->sinopis =Str::limit($artikel->deskripsi,50);
        $artikel->save();
        }
    }
}
