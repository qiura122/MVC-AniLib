<?php

class Manga extends Controller
{
    public function index()
    {
        $data['jdl'] = 'AniLib';
        $data['manga'] = $this->model('Manga_model')->getAllManga();
        $this->view('tamplates/header', $data);
        $this->view('manga/index', $data);
        $this->view('tamplates/footer');
    }
}

?>