<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Form Anime -->
        <div class="col-md-6">
            <h3 class="text-center">Input Anime</h3>
            <div class="card rounded shadow p-4">
                <form action="<?= BASEURL; ?>/input/AddAnime" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul_anime" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul_anime" name="judul">
                        <label for="deskripsi_anime" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi_anime" name="deskripsi"></textarea>
                        <label for="genre_anime" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre_anime" name="genre">
                        <label for="season_anime" class="form-label">Season</label>
                        <input type="text" class="form-control" id="season_anime" name="season">
                        <label for="image_anime" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_anime" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>

        <!-- Form Manga -->
        <div class="col-md-6">
            <h3 class="text-center">Input Manga</h3>
            <div class="card rounded shadow p-4">
                <form action="<?= BASEURL; ?>/input/AddManga" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul_manga" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul_manga" name="judul">
                        <label for="deskripsi_manga" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi_manga" name="deskripsi"></textarea>
                        <label for="genre_manga" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre_manga" name="genre">
                        <label for="season_manga" class="form-label">Season</label>
                        <input type="text" class="form-control" id="season_manga" name="season">
                        <label for="image_manga" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_manga" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
