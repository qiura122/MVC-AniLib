<?php

class About extends Controller
{
    public function index($nama = "AniLib")
    {
        $data['nama'] = $nama;
        $data['jdl'] = 'About AniLib';
        $this->view('tamplates/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }

}

?>