<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Desa Wisata<br>Bumi Arum</h1>
        <h2>Terletak di daerah Sleman desa ini wajib masuk daftar liburanmu!</h2>
        <a href="<?= base_url() ?>home/paket" class="btn-get-started">Pesan Sekarang</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/main.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Desa Wisata Bumi Arum berada di Daerah Istimewa Yogyakarta</h3>
                    <p class="fst-italic">
                        Lokasinya di kawasan lereng gunung Merapi yang berada 700 mdpl dan hanya berjarak 8,5 km dari puncak gunung.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Wisata Alam</li>
                        <li><i class="bi bi-check-circle"></i> Wisata Budaya</li>
                        <li><i class="bi bi-check-circle"></i> Wisata Pertanian</li>
                        <li><i class="bi bi-check-circle"></i> Wisata Perternakan</li>
                        <li><i class="bi bi-check-circle"></i> Camping Ground</li>
                    </ul>
                    <p>
                        Jarak Desa Wisata Bumi Arum dari pusat kota Yogyakarta adalah 27 km.
                    </p>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Destinasi</h2>
                <p>Populer</p>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php foreach ($populer as $value) { ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5">
                        <div class="course-item">
                            <img src="assets/img/upload/<?= $value->gambar ?>" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3><a href="course-details.html"><?= $value->nama_wisata ?></a></h3>
                                </div>
                                <p><?= $value->slug ?></p>
                                <div class="trainer d-flex justify-content-end align-items-center">
                                    <div class="trainer-rank d-flex align-items-center">
                                        <a href="<?= base_url('detail_destinasi') ?>/<?= $value->id ?>">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                <?php } ?>

            </div>

        </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= get start ======= -->
    <section id="get" class="get">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center align-item-center">
                <a href="<?= base_url() ?>home/paket" class="btn-get-started">Pesan Sekarang</a>
            </div>
        </div>

        </div>
    </section><!-- End get -->

</main><!-- End #main -->