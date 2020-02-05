<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = "Aku Cinta Bandung Dan Seseorang Di Dalamnya";
        return view('latihan', compact('a'));
    }

    public function pass1()
    {
        $data = [
            ['nama' => 'Hadi', 'kelas' => 'RPL 1'],
            ['nama' => 'Rendi', 'kelas' => 'RPL 2'],
            ['nama' => 'Indra', 'kelas' => 'RPL 3']
        ];
        return view('latihan1', ['siswa' => $data]);
    }

    public function latsol()
    {
        $data = [
            ['nama' => 'Hadiansyah', 'nip' => '123456', 'agama' => 'Islam', 'jk' => 'Laki-laki', 'jabatan' => 'Manager', 'jam_kerja' => '265'],

            ['nama' => 'fatur', 'nip' => '123455', 'agama' => 'Islam', 'jk' => 'Laki-laki', 'jabatan' => 'Sekretaris', 'jam_kerja' => '220'],

            ['nama' => 'dhea', 'nip' => '123444', 'agama' => 'Islam', 'jk' => 'Laki-laki', 'jabatan' => 'Staff', 'jam_kerja' => '150']
        ];
        return view('latsol', ['pegawai' => $data]);
    }
}