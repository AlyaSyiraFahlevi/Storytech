 <!-- Bootstrap JS and Vendor JS -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.js"></script>

 <!-- jQuery -->
 <script type="text/javascript" src="<?= base_url('js/jquery-3.4.1.min.js') ?>"></script>
 <!-- Bootstrap JS -->
 <script type="text/javascript" src="<?= base_url('js/bootstrap.js') ?>"></script>
 <!-- OwlCarousel -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

 <!-- Custom CSS -->
 <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

 <!-- Owl Carousel Initialization -->
 <script type="text/javascript">
     $(".owl-carousel").owlCarousel({
         loop: true,
         margin: 0,
         navText: [],
         center: true,
         autoplay: true,
         autoplayHoverPause: true,
         responsive: {
             0: {
                 items: 1
             },
             1000: {
                 items: 3
             }
         }
     });
 </script>

 <!-- AOS Animate On Scroll JS -->
 <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
 <script>
     // Initialize AOS
     AOS.init({
         duration: 800, // durasi animasi (ms)
         once: true // animasi hanya sekali saat scroll
     });

     // Scroll Event for Header Section
     window.addEventListener('scroll', function() {
         const header = document.querySelector('.header_section');
         if (window.scrollY > 50) {
             header.classList.add('scrolled');
         } else {
             header.classList.remove('scrolled');
         }
     });

     // Initialize Swiper
     var swiper = new Swiper('.swiper', {
         slidesPerView: 1,
         spaceBetween: 20,
         loop: true,
         direction: 'horizontal', // arah horizontal (samping)
         navigation: {
             nextEl: '.innovation-button-next',
             prevEl: '.innovation-button-prev',
         },
         breakpoints: {
             768: {
                 slidesPerView: 2,
             },
             1024: {
                 slidesPerView: 3,
             }
         }
     });
 </script>