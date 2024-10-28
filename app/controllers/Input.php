<?php

class Input extends Controller
{
    public function index()
    {
        $data['jdl'] = 'Input';
        $this->view('tamplates/header', $data);
        $this->view('input/index');
        $this->view('tamplates/footer');
    }

    public function AddAnime()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                // Ambil data dari form
                $judul = $_POST['judul'];
                $deskripsi = $_POST['deskripsi'];
                $genre = $_POST['genre'];
                $season = $_POST['season'];
                $image = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $folder = '../public/img/';

                // Cek apakah file sudah berhasil dipindahkan
                if (move_uploaded_file($tmp_name, $folder . $image)) {
                    $model = $this->model('Input_model'); // Memanggil model Input_model

                    // Simpan data ke database
                    if ($model->AddAllAnime($judul, $deskripsi, $genre, $season, $image)) {
                        header('Location: ' . BASEURL . '/input'); // Redirect ke halaman input
                        exit();
                    } else {
                        echo "Terjadi kesalahan saat menyimpan data.";
                    }
                } else {
                    echo "Gagal meng-upload file.";
                }
            } else {
                // Debug: Tampilkan error yang terjadi
                echo "File belum dipilih atau terjadi kesalahan saat upload. Error Code: " . $_FILES['image']['error'];
            }
        }
    }

    public function AddManga()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                // Ambil data dari form
                $judul = $_POST['judul'];
                $deskripsi = $_POST['deskripsi'];
                $genre = $_POST['genre'];
                $season = $_POST['season'];
                $image = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $folder = '../public/img/';

                // Cek apakah file sudah berhasil dipindahkan
                if (move_uploaded_file($tmp_name, $folder . $image)) {
                    $model = $this->model('Input_model'); // Memanggil model Input_model

                    // Simpan data ke database
                    if ($model->AddAllManga($judul, $deskripsi, $genre, $season, $image)) {
                        header('Location: ' . BASEURL . '/input'); // Redirect ke halaman input
                        exit();
                    } else {
                        echo "Terjadi kesalahan saat menyimpan data.";
                    }
                } else {
                    echo "Gagal meng-upload file.";
                }
            } else {
                // Debug: Tampilkan error yang terjadi
                echo "File belum dipilih atau terjadi kesalahan saat upload. Error Code: " . $_FILES['image']['error'];
            }
        }
    }
}
