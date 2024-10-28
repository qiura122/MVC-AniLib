<div class="container">
    <h1><?= $data['anime']['judul']; ?></h1>
    <div class="row">
        <div class="col-md-4">
            <img src="<?= BASEURL; ?>/img/<?= $data['anime']['image']; ?>" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h3><?= $data['anime']['judul']; ?></h3>
            <div class="container bg-body-secondary rounded-1 mt-4">
                <br>
                <p><?= $data['anime']['genre']; ?></p>
                <br>
                <p><?= $data['anime']['deskripsi']; ?></p>
                <br>
            </div>
        </div>
    </div>
</div>