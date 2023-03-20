<?php

namespace App\Controllers;
use App\Models\M_infak;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "kelas Coba";
    }
    public function coba1($nama)
    {
        // return view('welcome_message');

        echo "kelas Coba1 selamat datang ".$nama;
    }
    public function testdatabase()
    {
        $model = model("M_infak");
        // $this->M_infak = model("M_infak");
        $query = $model->getdata();
        $data = array(
            'query' => $query,
            'judul'=> "data infak"
        );
        return view('v_coba',$data);
    }
    ##COBAAAAAAA
    ##COBAAAAAAA2
    ##Tegar Ketua Kelompok
}
