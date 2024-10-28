<?php

class Home extends Controller
{
    public function index()
    {
        $data['jdl'] = 'Home';
        $data['anime'] = $this->model('Home_model')->getAllAnime();
        $data['manga'] = $this->model('Home_model')->getAllManga();
        $this->view('tamplates/header', $data);
        $this->view('home/index', $data);
        $this->view('tamplates/footer');
    }
}

?>