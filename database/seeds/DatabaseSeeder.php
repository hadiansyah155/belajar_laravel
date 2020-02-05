<?php
use App\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(PostSeeder::class);
        // $this->call(PenggajianSeeder::class);
        // $this->call(ArtikelSeeder::class);
        factory(Barang::class, 100)->create();
    }
}
