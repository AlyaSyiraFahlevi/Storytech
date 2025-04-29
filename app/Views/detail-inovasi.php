<?= $this->include('layouts/head') ?>
<?= $this->include('layouts/header') ?>

<!-- Detail Inovasi Section -->
<section id="detail-inovasi" class="py-5 bg-light">
    <div class="container">
        <!-- Judul Section -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="display-4"><strong><?= $inovasi['judul']; ?></strong></h2>
                <p class="lead"><?= $inovasi['tagline']; ?></p>
            </div>
        </div>

        <!-- Detail Inovasi Card -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card innovation-card shadow-sm">
                    <img src="/images/<?= $inovasi['gambar']; ?>" class="card-img-top" alt="Inovasi Teknologi">
                    <div class="card-body">
                        <h5 class="card-title"><?= $inovasi['subjudul']; ?></h5>
                        <p class="card-text"><?= $inovasi['subkonten']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm innovation-card">
                    <div class="card-body">
                        <h5 class="card-title">Video Penjelasan</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $inovasi['video_url']; ?>" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deskripsi Lanjutan -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center mb-4"><strong><?= $inovasi['judul_info']; ?></strong></h3>
                <p style="text-align: justify; margin-bottom: 1.5rem;"><?= $inovasi['deskripsi']; ?></p>
            </div>
        </div>

        <!-- Kembali -->
        <div class="d-flex justify-content-center my-4">
            <a href="<?= base_url('katalog-inovasi') ?>" class="btn btn-primary kembali-btn">
                Kembali
            </a>
        </div>


    </div>
</section>

<?= $this->include('layouts/footer') ?>
<?= $this->include('layouts/scripts') ?>

<!-- Custom CSS -->
<style>
    .innovation-card {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .innovation-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .innovation-card img {
        border-radius: 15px 15px 0 0;
        transition: transform 0.3s ease;
    }

    .innovation-card:hover img {
        transform: scale(1.05);
    }

    .card-body {
        padding: 1.25rem;
    }

    .card-title {
        font-weight: bold;
    }

    .embed-responsive {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        border-radius: 15px;
    }

    .embed-responsive-item {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: rgb(0, 30, 63);
    }
</style>