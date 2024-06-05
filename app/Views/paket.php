  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Paket Wisata</h2>
        <p>Paket wisata yang tersedia di Desa Wisata Bumi Arum dibagi berdasarkan jenis wisata.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <?php foreach ($paket as $value) { ?>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="box">
                <h3><?= $value->nama_paket ?></h3>
                <h4><sup>Rp.</sup><?= $value->harga ?><span> / orang</span></h4>
                <ul>
                  <?php foreach ($value->destinasi as $key) { ?>
                    <li><?= $key->nama_wisata ?></li>
                  <?php } ?>
                </ul>
                <p><?= $value->keterangan ?></p>
                <div class="btn-wrap">
                  <a href="<?php base_url() ?>pesan/<?= $value->id ?>" class="btn-buy">Pesan</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->