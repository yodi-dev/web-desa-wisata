  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 col-md-6">
            <div class="card">
              <div class="card-header">
                Pesan Paket
              </div>
              <div class="card-body">
                <h2 class="card-title">Silahkan isi formulir pesanan</h2>
                <?= form_open_multipart(base_url('home/pesanan')); ?>
                <div class="mb-3">
                  <input type="hidden" name="id_paket" value="<?= $paket->id ?>">
                  <label for="id_paket" class="form-label">Paket</label>
                  <input type="text" class="form-control" id="id_paket" value="<?= $paket->nama_paket ?>" disabled>
                  <input type="hidden" name="kode" value="<?= $random ?>" id="">
                </div>
                <div class="mb-3">
                  <label for="kode_pesanan" class="form-label">Kode Pesanan</label>
                  <input type="text" class="form-control" id="kode_pesanan" value="<?= $random ?>" aria-describedby="kode" disabled>
                  <div id="kode" class="form-text">Kode unik oleh sistem</div>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                  <label for="no_hp" class="form-label">No HP</label>
                  <input type="text" name="no_hp" class="form-control" id="no_hp">
                </div>
                <div class="mb-3">
                  <label for="jumlah_orang" class="form-label">Jumlah Orang</label>
                  <input type="number" name="jumlah_orang" class="form-control" id="jumlah_orang">
                </div>
                <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal">
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">Pesan</button>
                </div>
                <?= form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->