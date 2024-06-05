<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-10">
                <h2>Destinasi</h2>
                <p>Desa Wisata Bumi Arum mempunyai berbagai jenis destinasi wisata. Mulai dari wisata alam, wisata edukasi, wisata budaya, <i>camping ground</i> hingga <i>home stay.</i></p>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php foreach ($destinasi as $value) { ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <?php
                            if (!empty($value->gambar)) {
                                echo '<img src="' . base_url("assets/img/upload/$value->gambar") . '"class="img-fluid" alt="...">';
                            }
                            ?>
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h3><a href="<?= base_url('detail_destinasi') ?>/<?= $value->id ?>"><?= $value->nama_wisata ?></a></h3>
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

</main><!-- End #main -->