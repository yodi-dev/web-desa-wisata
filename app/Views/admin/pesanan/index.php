<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pesanan</div>
                        </div>
                        <div class="card-body">

                            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php } ?>

                            <div class="card-sub">
                                <a href="<?= base_url('pesanan/print') ?>" target="_blank" class="btn btn-sm btn-dark"><i class="fas fa-print"></i></a>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Paket</th>
                                        <th scope="col">Kode Pesanan</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Jumlah Orang</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" style="width: 12rem;">Aksi</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>