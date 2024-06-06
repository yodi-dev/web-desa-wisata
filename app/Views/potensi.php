<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Potensi Desa</h2>
      <p>Desa Wisata Bumi Arum masih mempunyai beberapa potensi wisata yang dapat dikembangkan menjadi wisata di masa depan nanti.</p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php foreach ($potensi as $value) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
            <div class="course-item">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h3><?= $value->nama_potensi ?></h3>
                </div>
                <p><?= $value->deskripsi ?></p>
              </div>
            </div>
          </div> <!-- End Course Item-->
        <?php } ?>
      </div>

    </div>
  </section><!-- End About Section -->

</main><!-- End #main -->