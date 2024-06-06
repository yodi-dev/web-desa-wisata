<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Destinasi</div>
                        </div>
                        <div class="card-body">
                            <div class="card-sub">
                                <a href="<?= base_url('destinasi/tambah') ?>" class="btn btn-sm btn-dark">+</a>
                            </div>
                            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php } ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Wisata</th>
                                        <th scope="col">Ket. Singkat</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Populer</th>
                                        <th scope="col" style="width: 9rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($destinasi as $value) { ?>
                                        <tr>
                                            <td><?= $value->nama_wisata ?></td>
                                            <td><?= $value->slug ?></td>
                                            <td><?= $value->deskripsi ?></td>
                                            <td><?= $value->harga ?></td>
                                            <td>
                                                <?php
                                                if (!empty($value->gambar)) {
                                                    echo '<img src="' . base_url("assets/img/upload/$value->gambar") . '" width="100">';
                                                }
                                                ?>
                                            </td>
                                            <td><?= $value->populer ?></td>
                                            <td><a href="<?= base_url() ?>destinasi_edit/<?= $value->id; ?>" class="btn btn-sm btn-dark mr-2">Edit</a><a href="<?= base_url() ?>destinasi/hapus/<?= $value->id; ?>" class="btn btn-sm btn-dark">Hapus</a></td>
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