<?php

class Deskripsi extends Controller
{
    public function index($id)
    {
        $data['jdl'] = 'Deskripsi';
        $data['anime'] = $this->model('Home_model')->getAnimeById($id);
        $this->view('tamplates/header', $data);
        $this->view('deskripsi/index', $data);
        $this->view('tamplates/footer');
    }
}

?>