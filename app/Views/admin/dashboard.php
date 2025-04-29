<?= $this->include('layouts/head') ?>

<section>
  <!-- Header -->
  <header id="site-header" class="site-header d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="site-brand" href="/admin">TechStory</a>
      <a href="/logout" class="btn btn-logout">
        Logout
      </a>
    </div>
  </header>

  <!-- Main -->
  <main id="main" class="mt-5">
    <section class="dashboard-section py-5">
      <div class="container mt-5">
        <h1 class="text-center">Dashboard Inovasi</h1>

        <div class="d-flex justify-content-start mb-4">
          <a href="/admin/create" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Inovasi Baru
          </a>
        </div>

        <?php if (session()->getFlashdata('pesan')): ?>
          <div class="alert alert-success text-center shadow-sm">
            <?= session()->getFlashdata('pesan') ?>
          </div>
        <?php endif; ?>

        <div class="table-responsive rounded shadow-sm mt-4">
          <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tagline</th>
                <th>Subjudul</th>
                <th>Gambar</th>
                <th>Video</th>
                <th>Dibuat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1 + (5 * ($currentPage - 1)); ?>
              <?php foreach ($inovasi as $item): ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= $item['judul'] ?></td>
                  <td><?= $item['tagline'] ?></td>
                  <td><?= $item['subjudul'] ?></td>
                  <td>
                    <?php if (!empty($item['gambar'])): ?>
                      <img src="/images/<?= $item['gambar'] ?>" alt="Gambar" class="img-fluid" style="height: 60px; object-fit: cover; border-radius: 0.75rem;">
                    <?php else: ?>
                      <span class="badge bg-secondary rounded-pill">Tidak Ada</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <?php if (!empty($item['video_url'])): ?>
                      <a href="https://www.youtube.com/watch?v=<?= $item['video_url'] ?>" target="_blank" class="btn btn-outline-primary btn-sm">Lihat Video</a>
                    <?php else: ?>
                      <span class="badge bg-secondary rounded-pill">Tidak Ada</span>
                    <?php endif; ?>
                  </td>
                  <td><?= date('d M Y', strtotime($item['created_at'])) ?></td>
                  <td>
                    <a href="/admin/detail/<?= $item['slug'] ?>" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-eye"></i> Detail
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <div class="d-flex justify-content-center mt-4">
            <?= $pager->links('inovasi', 'page_inovasi') ?>
          </div>
        </div>
      </div>
    </section>
  </main>
</section>

<?= $this->include('layouts/footer') ?>
<?= $this->include('layouts/scripts') ?>

<script>
  AOS.init({
    once: true,
    duration: 1000,
  });
</script>

<style>
  body {
    background: linear-gradient(135deg, rgb(221, 230, 255), rgb(225, 217, 255));
    font-family: 'Poppins', sans-serif;
    color: #333;
  }

  .header {
    background: linear-gradient(90deg, rgb(0, 54, 107), rgb(39, 0, 112));
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 1rem 0;
  }

  .logo h1 {
    font-weight: 800;
    color: #fff;
    letter-spacing: 1px;
  }

  .custom-hover-danger:hover {
    background: #ef5350;
    color: #fff;
    border-color: #ef5350;
  }

  .dashboard-section {
    padding-top: 120px;
  }

  .dashboard-section h1 {
    font-weight: 800;
    color: #333;
    margin-bottom: 2rem;
  }

  .btn-primary {
    background: linear-gradient(90deg, rgb(0, 54, 107), rgb(39, 0, 112));
    border: none;
    border-radius: 50px;
    padding: 0.6rem 1.5rem;
    font-weight: 600;
    transition: background 0.3s ease;
  }

  .btn-primary:hover {
    background: linear-gradient(90deg, rgb(0, 87, 173), rgb(62, 0, 177));
  }

  .table {
    border-radius: 1rem;
    overflow: hidden;
  }

  .table th,
  .table td {
    vertical-align: middle;
    text-align: center;
  }

  .table-hover tbody tr:hover {
    background-color: #e3f2fd;
  }

  .table img {
    border-radius: 0.75rem;
    height: 60px;
    object-fit: cover;
  }

  .alert-success {
    border-radius: 1rem;
    background-color: #d4edda;
    color: #155724;
  }

  .btn-outline-primary {
    border-color: #4d9fef;
    color: #4d9fef;
    border-radius: 50px;
    transition: 0.3s;
  }

  .btn-outline-primary:hover {
    background: #4d9fef;
    color: #fff;
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
</style>