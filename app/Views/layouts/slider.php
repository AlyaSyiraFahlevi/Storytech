<!-- Slider Section -->
<section class="slider_section position-relative">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php foreach ($inovasi_terbaru as $key => $item): ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= ($key == 0) ? 'active' : '' ?>"></li>
      <?php endforeach; ?>
    </ol>

    <div class="carousel-inner">
      <?php foreach ($inovasi_terbaru as $key => $item): ?>
        <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>">
          <div class="slider-background" style="background-image: url('images/<?= $item['gambar'] ?>');">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7">
                  <div class="detail-box text-white">
                    <h1 class="mb-3"><?= $item['judul'] ?></h1>
                    <p class="mb-4"><?= $item['tagline'] ?></p>
                    <a href="/detail-inovasi/<?= $item['slug'] ?>" class="btn-explore">Jelajahi Sekarang</a>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="img-box">
                    <img src="images/<?= $item['gambar'] ?>" alt="<?= $item['judul'] ?>" class="img-fluid animate__animated animate__zoomIn">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<!-- End Slider Section -->