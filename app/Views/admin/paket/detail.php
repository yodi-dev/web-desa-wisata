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
                            <a href="" class="btn btn-sm btn-dark">+ Destinasi</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($destinasi as $value) { ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <?= $value->nama_wisata ?>
                                    <a href="" class="btn btn-sm btn-dark">X</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- <div class="card">
                        <div class="card-header">
                            <div class="card-title">Detail Paket</div>
                        </div>
                        <?= form_open_multipart(base_url('paket/aksi_edit')); ?>
                        <div class="card-body">
                            <div class=" form-group">
                                <label for="nama_paket">Nama Paket</label>
                                <input type="hidden" name="id" value="<?= $paket->id ?>">
                                <input type="text" name="nama_paket" class="form-control" id="nama_paket" value="<?= $paket->nama_paket ?>">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" class="form-control" id="harga" value="<?= $paket->harga ?>">
                            </div>
                            <div class="form-check">
                                <?php foreach ($all_destinasi as $value) {  ?>
                                    <input class="form-check-input" type="checkbox" value="<?= $value->id ?>" id="destinasi">
                                    <label class="form-check-label" for="destinasi">
                                        <?= $value->nama_wisata ?>
                                    </label><br>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                        </div>
                        <?= form_close(); ?>
                    </div> -->
                </div>

            </div>
        </div>
    </div>

</div>