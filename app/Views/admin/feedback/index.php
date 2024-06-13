<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Kritik & Saran</div>
                        </div>
                        <div class="card-body">

                            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php } ?>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col" style="width: 8rem;">Status</th>
                                        <th scope="col" style="width: 10rem;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($feedback as $value) { ?>
                                        <tr>
                                            <td><?= $value->nama ?></td>
                                            <td><span class="<?php if ($value->status == "baru") echo "px-2 bg-success text-light" ?>"><?= $value->status ?></span></td>
                                            <td>
                                                <a href="<?= base_url() ?>feedback/show/<?= $value->id; ?>" class="btn btn-sm btn-dark mr-1">Lihat</a>
                                                <a href="<?= base_url() ?>feedback/hapus/<?= $value->id; ?>" class="btn btn-sm btn-dark">Hapus</a>
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