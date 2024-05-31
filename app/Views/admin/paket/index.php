<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Paket</div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub">
                                <a href="<?= base_url('paket/tambah') ?>" class="btn btn-sm btn-dark">+</a>
                            </div>
                            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php } ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Paket</th>
                                        <th scope="col">Harga Paket</th>
                                        <th scope="col" style="width: 13rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($paket as $value) { ?>
                                        <tr>
                                            <td><?= $value->nama_paket ?></td>
                                            <td> <?= $value->harga ?> </td>
                                            <td>
                                                <a href="<?= base_url() ?>detail_paket/<?= $value->id; ?>" class="btn btn-sm btn-dark mr-1">Detail</a>
                                                <a href="<?= base_url() ?>paket_edit/<?= $value->id; ?>" class="btn btn-sm btn-dark mr-1">Edit</a>
                                                <a href="<?= base_url() ?>paket/hapus/<?= $value->id; ?>" class="btn btn-sm btn-dark">Hapus</a>
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