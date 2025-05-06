<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Responsive</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .image-container {
            overflow: hidden;
            border-radius: 10px;
        }
        .image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        @media (max-width: 768px) {
            .gallery-container {
                display: flex;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                gap: 10px;
                padding-bottom: 10px;
            }
            .image-container {
                flex: 0 0 100%;
                scroll-snap-align: center;
            }
        }
    </style>
</head>
<body>
    <section id="foto" class="section-foto parallax">
        <div class="container">
            <div class="container-strip d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="judul-text">Foto Terbaru</h5>
            </div>
            <div class="align-left top-left">
                <a href="#" class="btn btn-outline-danger">Read More</a>
            </div>
        </div>
        <div class="container gallery-container d-lg-flex flex-wrap">
            <div class="col-lg-3 col-md-6 col-12 mb-4 image-container">
                <img src="assets/images/berita.png" class="img-fluid" alt="Foto Berita">
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 image-container">
                <img src="assets/images/berita.png" class="img-fluid" alt="Foto Berita">
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 image-container">
                <img src="assets/images/berita.png" class="img-fluid" alt="Foto Berita">
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 image-container">
                <img src="assets/images/berita.png" class="img-fluid" alt="Foto Berita">
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 image-container">
                <img src="assets/images/berita.png" class="img-fluid" alt="Foto Berita">
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-4 image-container">
                <img src="assets/images/berita.png" class="img-fluid" alt="Foto Berita">
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const galleryContainer = document.querySelector('.gallery-container');
            let isDown = false;
            let startX;
            let scrollLeft;

            galleryContainer.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - galleryContainer.offsetLeft;
                scrollLeft = galleryContainer.scrollLeft;
            });
            galleryContainer.addEventListener('mouseleave', () => {
                isDown = false;
            });
            galleryContainer.addEventListener('mouseup', () => {
                isDown = false;
            });
            galleryContainer.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - galleryContainer.offsetLeft;
                const walk = (x - startX) * 2;
                galleryContainer.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
</body>
</html>
