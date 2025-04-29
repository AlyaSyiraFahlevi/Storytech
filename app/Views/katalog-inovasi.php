<?= $this->include('layouts/head') ?>
<?= $this->include('layouts/header') ?>

<!-- Inovasi Section -->
<section id="inovasi" class="py-5 bg-light">
    <div class="container py-5">
        <h2 class="text-center mb-5"><strong>Inovasi Teknologi</strong></h2>
        <div class="row g-4">
            <?php foreach ($inovasi as $item): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm innovation-card">
                        <img src="<?= base_url('images/' . $item['gambar']) ?>" class="card-img-top fixed-img" alt="<?= esc($item['judul']) ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= esc($item['judul']) ?></h5>
                            <p class="card-text"><?= esc(word_limiter(strip_tags($item['deskripsi']), 20)) ?></p>
                            <div class="mt-auto">
                                <a href="<?= base_url('detail-inovasi/' . $item['slug']) ?>" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center mt-4">
            <?= $pager->links('inovasi', 'page_inovasi') ?>
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

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .fixed-img {
        height: 200px;
        object-fit: cover;
    }

    .card {
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* maksimal 2 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>