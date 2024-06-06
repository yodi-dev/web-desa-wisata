<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Potensi</div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub">
                                <a href="<?= base_url('potensi/tambah') ?>" class="btn btn-sm btn-dark">+</a>
                            </div>
                            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php } ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Potensi</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col" style="width: 9rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($potensi as $value) { ?>
                                        <tr>
                                            <td><?= $value->nama_potensi ?></td>
                                            <td><?= $value->deskripsi ?></td>
                                            <td><a href="<?= base_url() ?>potensi_edit/<?= $value->id; ?>" class="btn btn-sm btn-dark mr-2">Edit</a><a href="<?= base_url() ?>potensi/hapus/<?= $value->id; ?>" class="btn btn-sm btn-dark">Hapus</a></td>
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