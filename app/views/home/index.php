<div class="jumbotron">
    <div class="container mt-3">
        <h1 class="display-4" style="font-weight: bold;">Home</h1>
        <hr class="my-4">
        <a href="<?= BASEURL; ?>/anime"
            style="text-decoration: none; color: black; padding: 10px 20px; border-radius: 5px; display: inline-block;">
            <p class="lead" style="font-size: 32px; font-weight: bold;">Anime</p>
        </a>
        <hr class="my-2">
        <div class="container d-flex flex-warp justify-content-start">
            <?php foreach ($data['anime'] as $anime): ?>
                <a href="<?= BASEURL; ?>/deskripsi/index/<?= $anime['id']; ?>"
                    style="text-decoration: none; color: black; padding: 10px 20px; border-radius: 5px; display: inline-block;">
                    <div class="card" style="width: 13rem; border-radius: 25px; margin-right: 10px;">
                        <img class="card-img-top" src="<?= BASEURL; ?>/img/<?= $anime['image']; ?>"
                            style="border-radius: 25px;">
                        <div class="card-body">
                            <p class="card-text">
                            <div class="container" style="font-size: 18px; font-weight: bold;"><?= $anime['judul']; ?></div>
                            <div class="container" style="font-size: 12px;"><?= $anime['genre']; ?></div>
                            <div class="container" style="font-size: 14px;"><?= $anime['season']; ?></div>
                            </p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <hr class="my-4">
        <a href="<?= BASEURL; ?>/manga"
            style="text-decoration: none; color: black; padding: 10px 20px; border-radius: 5px; display: inline-block;">
            <p class="lead" style="font-size: 32px; font-weight: bold;">Manga</p>
        </a>
        <hr class="my-2">
        <div class="container d-flex flex-warp justify-content-start">
            <?php foreach ($data['manga'] as $manga): ?>
                <a href="<?= BASEURL; ?>/deskripsi/index/<?= $manga['id']; ?>"
                    style="text-decoration: none; color: black; padding: 10px 20px; border-radius: 5px; display: inline-block;">
                    <div class="card" style="width: 13rem; border-radius: 25px; margin-right: 10px;">
                        <img class="card-img-top" src="<?= BASEURL; ?>/img/<?= $manga['image']; ?>"
                            style="border-radius: 25px;">
                        <div class=" card-body">
                            <p class="card-text">
                            <div class="container" style="font-size: 18px; font-weight: bold;"><?= $manga['judul']; ?></div>
                            <div class="container" style="font-size: 12px;"><?= $manga['genre']; ?></div>
                            <div class="container" style="font-size: 14px;"><?= $manga['season']; ?></div>
                            </p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>