<?= $this->include('layouts/head') ?>

<section class="mt-5">
    <div class="login-card" data-aos="zoom-in">
        <h1 class="sitename">Story of Technology</h1>
        <h4>Selamat Datang Kembali!</h4>
        <p>Menyelami kisah inovasi teknologi yang membentuk dunia kita — dari internet, AI, hingga masa depan.</p>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/login/auth">
            <div class="mb-3 text-start">
                <label for="identifier" class="form-label">Username atau Email</label>
                <input type="text" class="form-control" id="identifier" name="username" placeholder="Masukkan username atau email" required>
            </div>
            <div class="mb-3 text-start position-relative">
                <label for="password" class="form-label">Password</label>
                <div class="position-relative">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    <button type="button" id="togglePassword" class="toggle-password">
                        <i class="bi bi-eye-slash" id="toggleIcon" style="font-size: 1.2rem;"></i>
                    </button>
                </div>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-custom">Masuk</button>
            </div>

        </form>
    </div>
</section>

<?= $this->include('layouts/scripts') ?>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const toggleIcon = document.querySelector('#toggleIcon');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        if (type === 'text') {
            toggleIcon.classList.remove('bi-eye-slash');
            toggleIcon.classList.add('bi-eye');
        } else {
            toggleIcon.classList.remove('bi-eye');
            toggleIcon.classList.add('bi-eye-slash');
        }
    });

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

    .login-card {
        max-width: 400px;
        margin: auto;
        padding: 40px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .sitename {
        font-size: 32px;
        font-weight: 700;
        color: #003A6B;
        margin-bottom: 10px;
    }

    .login-card h4 {
        font-size: 22px;
        color: #333;
        margin-bottom: 5px;
    }

    .login-card p {
        color: #777;
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        padding: 10px;
        font-size: 16px;
        border-radius: 8px;
        border: 1px solid #ddd;
        margin-bottom: 15px;
    }

    .form-control:focus {
        border-color: #0072ff;
        box-shadow: 0 0 5px rgba(0, 114, 255, 0.3);
    }

    .toggle-password {
        position: absolute;
        right: 10px;
        top: 35%;
        background: transparent;
        border: none;
        color: #0072ff;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #0072ff;
        border-color: #0072ff;
        font-size: 18px;
        font-weight: 600;
        border-radius: 50px;
        padding: 12px;
        transition: background-color 0.3s ease;
    }

    /* Tombol khusus */
    .btn-custom {
        background: linear-gradient(90deg, rgb(0, 54, 107), rgb(39, 0, 112));
        /* Warna gradasi */
        color: white;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 50px;
        /* Membuat sudut tombol lebih halus */
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        /* Efek bayangan */
    }

    .btn-custom:hover {
        background: linear-gradient(135deg, #00d2ff, #007bff);
        /* Efek hover dengan perubahan warna gradasi */
        transform: scale(1.05);
        /* Efek zoom in saat hover */
        box-shadow: 0 6px 15px rgba(0, 123, 255, 0.5);
        /* Bayangan lebih besar saat hover */
    }

    .btn-custom:focus {
        outline: none;
        /* Menghilangkan outline ketika tombol difokuskan */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        /* Fokus dengan efek bayangan */
    }


    /* RESPONSIVE */
    @media (max-width: 768px) {
        .login-card {
            padding: 30px;
            width: 90%;
        }
    }

    .toggle-password {
        position: absolute;
        right: 10px;
        /* Posisi ikon dari sisi kanan */
        top: 50%;
        transform: translateY(-50%);
        /* Memastikan ikon berada di tengah secara vertikal */
    }
</style>