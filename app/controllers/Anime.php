<?php

class Anime extends Controller
{
    public function index()
    {
        $data['jdl'] = 'AniLib';
        $data['anime'] = $this->model('Anime_model')->getAllAnime();
        $this->view('tamplates/header', $data);
        $this->view('anime/index', $data);
        $this->view('tamplates/footer');
    }
}

?>