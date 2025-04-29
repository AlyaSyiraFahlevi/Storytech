<!DOCTYPE html>
<html lang="en">

<?= $this->include('layouts/head') ?>

<body id="home">
    <!-- Loading Spinner -->
    <div id="loading-spinner" style="position: fixed; top:0; left:0; width:100%; height:100%; background:white; display:flex; justify-content:center; align-items:center; z-index:9999;">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <?= $this->include('layouts/header') ?>

    <div class="hero_area">
        <?= $this->include('layouts/slider') ?>
        <?= $this->include('layouts/tentang') ?>
        <?= $this->include('layouts/inovasi') ?>
        <?= $this->include('layouts/hubungi') ?>
    </div>

    <?= $this->include('layouts/footer') ?>
    <?= $this->include('layouts/scripts') ?>

    <!-- AOS JS + Spinner Hide -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        window.addEventListener('load', function() {
            const spinner = document.getElementById('loading-spinner');
            spinner.style.opacity = 0;
            spinner.style.visibility = 'hidden';
            spinner.style.transition = 'opacity 0.5s ease';
        });
    </script>
</body>

</html>