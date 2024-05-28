<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Galeri</div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub">
                                <a href="<?= base_url('admin/tambah_galeri') ?>" class="btn btn-sm btn-dark">+</a>
                            </div>
                            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php } ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col" style="width: 9rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($galeri as $value) { ?>
                                        <tr>
                                            <td><?= $value->judul ?></td>
                                            <td>
                                                <?php
                                                if (!empty($value->gambar)) {
                                                    echo '<img src="' . base_url("assets/img/upload/$value->gambar") . '" width="100">';
                                                }
                                                ?>
                                            </td>
                                            <td><a href="<?= base_url() ?>edit_destinasi/<?= $value->id; ?>" class="btn btn-sm btn-dark mr-2">Edit</a><a href="<?= base_url() ?>admin/hapus_galeri/<?= $value->id; ?>" class="btn btn-sm btn-dark">Hapus</a></td>
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