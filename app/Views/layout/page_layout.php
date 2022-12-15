<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institut Akuntan Publik Indonesia</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tentang') ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('keanggotaan') ?>">Keanggotaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pelatihan') ?>">Pelatihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('sertifikasi') ?>">Sertifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('peraturan') ?>">Peraturan, Publikasi, Standar Profesi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('international') ?>">International Corner</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">IAPI - Institut Akuntan Publik Indonesia</h1>
                </div>
            </div>
        </div>
    </header>

    <?= $this->renderSection('content') ?>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?> IAPI</div>
    </footer>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>