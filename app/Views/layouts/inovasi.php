<!-- How Section -->
<section id="inovasi" class="how_section layout_padding" data-aos="fade-up">
  <div class="container">
    <div class="heading_container">
      <h2>Pilar Teknologi Masa Kini</h2>
    </div>
    <div class="how_container">
      <?php foreach ($inovasi_terbaru as $item): ?>
        <div class="box">
          <div class="img-box">
            <!-- Menampilkan gambar dari database -->
            <img src="images/<?= $item['gambar'] ?>" alt="<?= $item['judul'] ?>" class="img-fluid">
          </div>
          <div class="detail-box">
            <h5>
              <a href="detail-inovasi/<?= $item['slug'] ?>">
                <?= $item['judul'] ?>
              </a>
            </h5>
            <p><?= $item['tagline'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Button to Show More -->
  <div class="text-center">
    <a href="/katalog-inovasi" class="btn btn-primary btn-lg mt-4">Lihat Inovasi Selanjutnya</a>
  </div>

</section>
<!-- End How Section -->