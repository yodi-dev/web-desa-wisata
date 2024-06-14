<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Tentang Kami</h2>
      <p>
        GONDOARUM merupakan dusun yang terletak di desa Wonokerto, Kec. Turi, Kab. Sleman, Yogyakarta. Dusun Gondoarum juga merupakan salah satu dusun yang berbatasan langsung dengan jawa tengah. Dusun ini memiliki sumber daya alam yang melimpah, dengan aliran sungai krasak, aliran sungai pandan arum, bendungan suro, perkebunan salak, cabai, padi, dan terasering sawah
      </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <?php if (!empty(session()->getFlashdata('error'))) {  ?>
    <div class="alert alert-danger">
      <?= session()->getFlashdata('error') ?>
    </div>
  <?php } ?>
  <?php if (!empty(session()->getFlashdata('success'))) {  ?>
    <div class="alert alert-success">
      <?= session()->getFlashdata('success') ?>
    </div>
  <?php } ?>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="../assets/img/hero.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Visi Misi</h3>
          <p class="fst-italic">
            Mewujudkan kerukunan masyarakat Gondoarum dan berwawasan lingkungan serta melestarikan sumber daya alam dan budaya .
          </p>
          <ul>
            <li>1. Menjaga dan melestarikan sumber daya alam serta budaya Desa Gondoarum.</li>
            <li> 2. Membangun Desa Gondoarum yang ramah lingkungan.</li>
            <li> 3. Menjadikan Desa Gondoarum daya tarik wisata yang menarik, kreatif, dan nyaman.</li>
            <li>
            <li> 3. Menjadikan Desa Gondoarum daya tarik wisata yang menarik, kreatif, dan nyaman.</li>
            </li>
          </ul>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="row mt-5">
        <div class="col-lg-8 mt-5 mt-lg-0">
          <div class="card">
            <div class="card-header bg-success text-light">
              <h3>Kritik & Saran</h3>
            </div>
            <div class="card-body">
              <form action="<?= base_url('home/send') ?>" method="post">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="form-group my-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="text-center">
                  <button class="btn btn-success" type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>
            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>
          </div> -->
        </div>

      </div>
    </div>
  </section><!-- End Contact Section -->


</main><!-- End #main -->