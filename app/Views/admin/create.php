<?= $this->include('layouts/head') ?>

<header id="header" class="site-header fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="site-brand" href="/admin">TechStory</a>
        <a href="/logout" class="btn btn-logout">Logout</a>
    </div>
</header>

<main class="mt-header">
    <section class="detail-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="detail-card">
                        <div class="detail-card-header">
                            <h2 class="detail-title">Tambah Materi Baru</h2>
                        </div>
                        <div class="detail-content">
                            <form action="/admin/save" method="post" enctype="multipart/form-data" class="create-form">

                                <?= csrf_field(); ?>

                                <!-- Judul -->
                                <div class="mb-4">
                                    <label for="judul" class="form-label fw-semibold text-primary"><strong>Judul Materi</strong></label>
                                    <input type="text" id="judul" name="judul" class="form-control <?= session('errors.judul') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul" value="<?= old('judul'); ?>">
                                    <?php if (session('errors.judul')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.judul'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Tagline -->
                                <div class="mb-4">
                                    <label for="tagline" class="form-label fw-semibold text-primary"><strong>Tagline</strong></label>
                                    <input type="text" id="tagline" name="tagline" class="form-control <?= session('errors.tagline') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Tagline" value="<?= old('tagline'); ?>">
                                    <?php if (session('errors.tagline')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.tagline'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Subjudul -->
                                <div class="mb-4">
                                    <label for="subjudul" class="form-label fw-semibold text-primary"><strong>Subjudul</strong></label>
                                    <input type="text" id="subjudul" name="subjudul" class="form-control <?= session('errors.subjudul') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Subjudul" value="<?= old('subjudul'); ?>">
                                    <?php if (session('errors.subjudul')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.subjudul'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Subkonten -->
                                <div class="mb-4">
                                    <label for="subkonten" class="form-label fw-semibold text-primary"><strong>Subkonten</strong></label>
                                    <input type="text" id="subkonten" name="subkonten" class="form-control <?= session('errors.subkonten') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Subkonten" value="<?= old('subkonten'); ?>">
                                    <?php if (session('errors.subkonten')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.subkonten'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Judul Info -->
                                <div class="mb-4">
                                    <label for="judul_info" class="form-label fw-semibold text-primary"><strong>Judul Info</strong></label>
                                    <input type="text" id="judul_info" name="judul_info" class="form-control <?= session('errors.judul_info') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul Info" value="<?= old('judul_info'); ?>">
                                    <?php if (session('errors.judul_info')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.judul_info'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Deskripsi -->
                                <div class="mb-4">
                                    <label for="deskripsi" class="form-label fw-semibold text-primary"><strong>Deskripsi</strong></label>
                                    <textarea class="form-control <?= session('errors.deskripsi') ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" rows="6" placeholder="Masukkan Deskripsi"><?= old('deskripsi'); ?></textarea>
                                    <?php if (session('errors.deskripsi')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.deskripsi'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Upload Gambar -->
                                <div class="mb-4">
                                    <label for="gambar" class="form-label fw-semibold text-primary"><strong>Gambar (Opsional)</strong></label>
                                    <div class="input-gambar-wrapper">
                                        <img id="preview-img" src="/images/default.jpg" class="input-gambar-preview">
                                        <input type="file" id="gambar" name="gambar"
                                            class="form-control input-gambar-file <?= session('errors.gambar') ? 'is-invalid' : ''; ?>"
                                            onchange="previewImg()">
                                    </div>
                                    <?php if (session('errors.gambar')): ?>
                                        <div class="invalid-feedback d-block">
                                            <?= session('errors.gambar'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>



                                <!-- Video URL -->
                                <div class="mb-4">
                                    <label for="video_url" class="form-label fw-semibold text-primary"><strong>YouTube Video ID</strong></label>
                                    <input type="text" id="video_url" name="video_url" class="form-control <?= session('errors.video_url') ? 'is-invalid' : ''; ?>" placeholder="Contoh: dQw4w9WgXcQ" value="<?= old('video_url'); ?>">
                                </div>

                                <!-- Tombol -->
                                <div class="mt-4">
                                    <a href="/admin" class="btn btn-secondary rounded-pill">Batal</a>
                                    <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
                                    <?php if (session('errors.video_url')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('errors.video_url'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->include('layouts/footer') ?>
<?= $this->include('layouts/scripts') ?>

<script>
    AOS.init({
        once: true,
        duration: 800,
    });

    function previewImg() {
        const gambar = document.getElementById('gambar');
        const preview = document.getElementById('preview-img');

        if (gambar.files && gambar.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(gambar.files[0]);
        }
    }
</script>

<style>
    /* GENERAL RESET */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, rgb(221, 230, 255), rgb(225, 217, 255));
        color: #333;
    }

    /* HEADER */
    .site-header {
        background: linear-gradient(90deg, rgb(0, 54, 107), rgb(39, 0, 112));
        padding: 15px 0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .site-brand {
        font-size: 24px;
        font-weight: 700;
        color: rgb(255, 255, 255);
        text-decoration: none;
    }

    .site-brand:hover {
        color: rgb(0, 217, 255);
    }

    .btn-logout {
        padding: 8px 20px;
        border: 2px solid #ffc107;
        border-radius: 50px;
        color: #ffc107;
        background: transparent;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-logout:hover {
        background: #ffc107;
        color: #fff;
    }

    /* MAIN */
    .mt-header {
        margin-top: 100px;
        min-height: 80vh;
    }

    .detail-page {
        padding: 60px 0;
    }

    /* CARD DETAIL */
    .detail-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 0.8s ease;
    }

    .detail-card-header {
        background: linear-gradient(90deg, rgb(0, 54, 107), rgb(39, 0, 112));
        padding: 30px 30px;
        text-align: center;
    }

    .detail-title {
        color: #ffffff;
        font-size: 28px;
        font-weight: 700;
    }

    /* IMAGE WRAPPER */
    .detail-image-wrapper {
        text-align: center;
        margin: 30px 0;
    }

    .detail-image {
        max-width: 90%;
        height: auto;
        max-height: 320px;
        border-radius: 12px;
        object-fit: cover;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    /* CONTENT DETAIL */
    .detail-content {
        padding: 30px;
    }

    .detail-item {
        margin-bottom: 25px;
    }

    .detail-item-title {
        font-weight: 600;
        color: #0072ff;
        margin-bottom: 5px;
    }

    .detail-item-text {
        color: #555;
        font-size: 16px;
    }

    .detail-description {
        color: #444;
        font-size: 16px;
        line-height: 1.7;
    }

    /* VIDEO */
    .detail-video {
        margin-top: 15px;
    }

    .detail-video iframe {
        width: 100%;
        height: 400px;
        border: none;
        border-radius: 12px;
    }

    /* ACTION BUTTONS */
    .detail-actions {
        margin-top: 30px;
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn {
        padding: 10px 24px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 50px;
        transition: 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-back {
        border: 2px solid #007bff;
        color: #007bff;
        background: transparent;
    }

    .btn-back:hover {
        background: #007bff;
        color: #ffffff;
    }

    .btn-edit {
        border: 2px solid #28a745;
        color: #28a745;
        background: transparent;
    }

    .btn-edit:hover {
        background: #28a745;
        color: #ffffff;
    }

    .btn-delete {
        border: 2px solid #dc3545;
        color: #dc3545;
        background: transparent;
    }

    .btn-delete:hover {
        background: #dc3545;
        color: #ffffff;
    }

    /* FOOTER */
    .detail-footer {
        text-align: center;
        color: #aaa;
        font-size: 14px;
        margin-top: 40px;
        padding-bottom: 20px;
    }

    /* ANIMATIONS */
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .detail-card-header {
            padding: 30px 20px;
        }

        .detail-title {
            font-size: 22px;
        }

        .detail-content {
            padding: 20px;
        }

        .detail-video iframe {
            height: 250px;
        }
    }

    .input-gambar-wrapper {
        display: flex;
        align-items: center;
        gap: 1rem;
        /* Jarak antara gambar dan input */
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .input-gambar-preview {
        /* width: 100px; */
        height: 100px;
        object-fit: cover;
        border-radius: 0.5rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .form-control[type="file"] {
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        height: auto;
        align-self: center;
    }
</style>