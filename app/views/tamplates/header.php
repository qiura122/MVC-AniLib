<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['jdl']; ?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            background-color: skyblue;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">AniLib</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/anime">Anime</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/manga">Manga</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/input">Input</a>
                </div>
            </div>
        </div>
    </nav>