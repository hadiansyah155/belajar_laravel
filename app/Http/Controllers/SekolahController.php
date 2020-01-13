<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function hallo()
    {
    	return"Hallo Dunia";
    }

     public function dunia()
    {
    	return"Dunia programming";
    }

      public function dunia1()
    {
    	return"Dunia Hiburan";
    }

       public function dunia2()
    {
    	return"Dunia mimpi";
    }

       public function dunia3()
    {
    	return"Dunia bermain";
    }

       public function dunia4()
    {
    	return"Dunia Game";
    }

       public function dunia5()
    {
    	return"Dunia lain";
    }

       public function dunia6()
    {
    	return"Dunia maya";
    }

       public function dunia7()
    {
    	return"Dunia Rebahan";
    }

       public function dunia8()
    {
    	return"hadiansyah";
    }

       public function dunia9()
    {
    	return"bismillah";
    }

       public function dunia10()
    {
    	return"Allhamdulillah";
    }

        public function jeniskucing($warna)
    {
    	return"wanrna kucing kamu adalah : ".$warna;
    }

        public function jeniskucing1($warna= null)
    {
    	if (!$warna) {
    	    return "warna belum di pilih";
    	}else {
    		return "warna kucing kamu adalah warna : ".$warna;
    	}

    	public function warteg($beli= null)
    {
    	if (!$beli) {
    	    return "silahkan masukan item terlebih dahulu";
    	}else {
    		return "anda membeli : ".$beli;
    	}
    }
}
