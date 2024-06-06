<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Detail Paket</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $paket->nama_paket ?></h5>
                            <p class="card-text"><?= $paket->harga ?></p>
                            <a href="<?php base_url() ?>tambah/<?= $paket->id ?>" class="btn btn-sm btn-dark">+ Destinasi</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($destinasi as $value) { ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <?= $value->nama_wisata ?>
                                    <a href="<?php base_url() ?>hapus_detail/<?= $value->id ?>" class="btn btn-sm btn-dark">X</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>