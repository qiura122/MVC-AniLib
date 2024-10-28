<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Manga</h3>
            <div class="container d-flex flex-warp justify-content-start mt-3">
                <?php foreach ($data['manga'] as $manga): ?>
                    <div style="margin-right: 10px;">
                        <div class="card" style="width: 13rem; border-radius: 25px;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/<?= $manga['image']; ?>"
                                style="border-radius: 25px;">
                            <div class="card-body">
                                <p class="card-text">
                                <div class="container" style="font-size: 18px; font-weight: bold;"><?= $manga['judul']; ?>
                                </div>
                                <div class="container" style="font-size: 12px;"><?= $manga['genre']; ?></div>
                                <div class="container" style="font-size: 14px;"><?= $manga['season']; ?></div>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>