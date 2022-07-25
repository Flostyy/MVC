<?php

class About extends Controller
    {
    public function index($nama = 'Spongebob', $pekerjaan = 'Jellyfish Catcher', $umur = 17) 
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
        // echo "Halo nama saya $nama, saya adalah seorang $pekerjaan. Umur saya $umur tahun.";
    }

    public function page() 
    {   
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}