<?php

use Illuminate\Database\Seeder;

class PenggajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $posts = [ 
			['nama'=>'Hadiansyah',
			 'jabatan'=>'Manager',
			 'jk'=>'Laki-laki',
			 'alamat'=>'jl.TKI3',
			 'agama'=>'islam',
			 'total_gaji'=>'6.000.000'],

			 ['nama'=>'Hadiansyah',
			 'jabatan'=>'keuangan',
			 'jk'=>'Laki-laki',
			 'alamat'=>'jl.TKI3',
			 'agama'=>'islam',
			 'total_gaji'=>'5.000.000'],

			 ['nama'=>'Hadiansyah',
			 'jabatan'=>'Hrd',
			 'jk'=>'Laki-laki',
			 'alamat'=>'jl.TKI3',
			 'agama'=>'islam',
			 'total_gaji'=>'4.000.000'],

			 ['nama'=>'Hadiansyah',
			 'jabatan'=>'staff',
			 'jk'=>'Laki-laki',
			 'alamat'=>'jl.TKI3',
			 'agama'=>'islam',
			 'total_gaji'=>'3.000.000'],

			 ['nama'=>'Hadiansyah',
			 'jabatan'=>'Mytik',
			 'jk'=>'Laki-laki',
			 'alamat'=>'jl.TKI3',
			 'agama'=>'islam',
			 'total_gaji'=>'1.000.000']

			];

		// masukkan data ke database 
		DB::table('penggajians')->insert($posts);
    }
}
