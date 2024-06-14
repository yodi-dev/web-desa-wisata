<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pesanan</div>
                        </div>
                        <div class="card-sub">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-9">
                                    <?php
                                    // echo form_open('choose_date') 
                                    ?>
                                    <form action="<?= base_url('choose_date') ?>" method="post" target="_blank">
                                        <?= csrf_field(); ?>
                                        <div class="container align-items-center">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="inputMulaiTanggal" class="font-weight-bold">Tanggal :</label>
                                                        <input type="date" id="inputMulaiTanggal" name="mulai_tanggal" class="form-control" name="mulai_tanggal" required>
                                                        <input type="date" id="inputSampaiTanggal" name="sampai_tanggal" class="form-control" name="sampai_tanggal" required>
                                                    </div>
                                                </div>
                                                <div class="col-6 d-flex align-items-center">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-sm btn-dark"><i class="fas fa-search"></i> Find</button>
                                                        <button type="submit" name="print" class="btn btn-sm btn-dark mx-2"><i class="fas fa-print"></i> Print</button>
                                                        <a href="<?= base_url('pesanan/print') ?>" target="_blank" class="btn btn-sm btn-dark"><i class="fas fa-print"></i> Semua</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                    // echo form_close() 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php } ?>

                            <table class="table table-bordered" id="pesanan">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Paket</th>
                                        <th scope="col">Kode Pesanan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Jumlah Orang</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" style="width: 10rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pesanan as $value) { ?>
                                        <tr>
                                            <td><?= $value->tanggal ?></td>
                                            <td><?= $value->id_paket ?></td>
                                            <td><?= $value->kode_pesanan ?></td>
                                            <td><?= $value->nama ?></td>
                                            <td><?= $value->no_hp ?></td>
                                            <td><?= $value->jumlah_orang ?></td>
                                            <td><?= $value->status ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>pesanan_edit/<?= $value->id; ?>" class="btn btn-sm btn-dark mr-2">Edit Status</a>
                                                <a href="<?= base_url() ?>pesanan/hapus/<?= $value->id; ?>" class="btn btn-sm btn-dark">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>