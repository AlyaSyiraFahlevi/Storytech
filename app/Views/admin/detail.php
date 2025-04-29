<?= $this->include('layouts/head') ?>

<!-- Header -->
<header id="site-header" class="site-header d-flex align-items-center fixed-top">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="site-brand" href="/admin">TechStory</a>
    <a href="/logout" class="btn btn-logout">
      Logout
    </a>
  </div>
</header>

<main id="site-main" class="site-main mt-header">
  <section class="detail-page py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">

          <div class="detail-card animate__animated animate__fadeInUp">
            <!-- Card Header -->
            <div class="detail-card-header">
              <h2 class="detail-title">
                <?= htmlspecialchars($inovasi['judul'], ENT_QUOTES, 'UTF-8'); ?>
              </h2>
            </div>

            <!-- Gambar Materi -->
            <?php if (!empty($inovasi['gambar'])) : ?>
              <div class="detail-image-wrapper">
                <img src="/images/<?= $inovasi['gambar']; ?>"
                  alt="Gambar Materi"
                  class="detail-image">
              </div>
            <?php endif; ?>

            <!-- Konten Detail -->
            <div class="detail-content">
              <div class="detail-item">
                <h5 class="detail-item-title">Slug Materi</h5>
                <p class="detail-item-text"><?= htmlspecialchars($inovasi['slug'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>

              <div class="detail-item">
                <h5 class="detail-item-title">Tagline</h5>
                <p class="detail-item-text"><?= htmlspecialchars($inovasi['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>

              <div class="detail-item">
                <h5 class="detail-item-title">Subjudul</h5>
                <p class="detail-item-text"><?= htmlspecialchars($inovasi['subjudul'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>

              <div class="detail-item">
                <h5 class="detail-item-title">Subkonten</h5>
                <p class="detail-item-text"><?= htmlspecialchars($inovasi['subkonten'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>

              <div class="detail-item">
                <h5 class="detail-item-title">Judul Info</h5>
                <p class="detail-item-text"><?= htmlspecialchars($inovasi['judul_info'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>

              <div class="detail-item">
                <h5 class="detail-item-title">Deskripsi</h5>
                <div class="detail-description">
                  <?= nl2br(htmlspecialchars($inovasi['deskripsi'], ENT_QUOTES, 'UTF-8')); ?>
                </div>
              </div>

              <div class="detail-item">
                <h5 class="detail-item-title">Video Pembelajaran</h5>
                <div class="detail-video">
                  <iframe src="https://www.youtube.com/embed/<?= htmlspecialchars($inovasi['video_url'], ENT_QUOTES, 'UTF-8'); ?>"
                    title="Video Materi" allowfullscreen></iframe>
                </div>
              </div>

              <!-- Action Buttons -->
              <div class="detail-actions">
                <a href="/admin" class="btn btn-back">
                  <i class="bi bi-arrow-left"></i> Kembali
                </a>

                <a href="/admin/edit/<?= $inovasi['slug']; ?>" class="btn btn-edit">
                  <i class="bi bi-pencil-square"></i> Edit
                </a>

                <form action="/admin/delete/<?= $inovasi['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus materi ini?');" class="d-inline">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-delete">
                    <i class="bi bi-trash"></i> Hapus
                  </button>
                </form>
              </div>

              <!-- Footer -->
              <div class="detail-footer">
                Terakhir diperbarui: <?= date('d M Y', strtotime($inovasi['updated_at'])); ?>
              </div>

            </div> <!-- End Detail Content -->

          </div> <!-- End Detail Card -->

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
</style>