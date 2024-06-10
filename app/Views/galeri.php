<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Galeri</h2>
      <p>Kenangan akan abadi apabila diabadikan kan?</p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Galeri Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php foreach ($galeri as $value) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <div class="course-item">
              <?php
              if (!empty($value->gambar)) {
                echo '<img src="' . base_url("assets/img/upload/$value->gambar") . '"class="img-fluid" alt="...">';
              }
              ?>
              <div class="course-content">
                <div class="trainer d-flex justify-content-center align-items-center">
                  <p><?= $value->judul ?></p>
                </div>
              </div>
            </div>
          </div> <!-- End Galeri Item-->
        <?php } ?>
      </div>
    </div>
  </section><!-- End  Galeri Section -->


</main><!-- End #main -->