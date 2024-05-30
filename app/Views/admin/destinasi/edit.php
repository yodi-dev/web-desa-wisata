<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Destinasi</div>
                        </div>
                        <?= form_open_multipart(base_url('destinasi/aksi_edit')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_wisata">Nama Wisata</label>
                                <input type="hidden" name="id" value="<?= $destinasi->id ?>">
                                <input type="text" name="nama_wisata" class="form-control" id="nama_wisata" value="<?= $destinasi->nama_wisata ?>">
                            </div>
                            <div class="form-group">
                                <label for="slug">Keterangan Singkat</label>
                                <input type="text" name="slug" class="form-control" id="slug" value="<?= $destinasi->slug ?>">
                            </div>
                            <div class=" form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $destinasi->deskripsi ?>">
                            </div>
                            <div class=" form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" class="form-control" id="harga" value="<?= $destinasi->harga ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <br>
                                <?php
                                if (!empty($destinasi->gambar)) {
                                    echo '<img src="' . base_url("assets/img/upload/$destinasi->gambar") . '" width="150">';
                                }
                                ?>
                                <input type="file" name="gambar" class="form-control-file mt-1" id="exampleFormControlFile1">
                            </div>
                            <div class="form-check">
                                <label>Populer</label><br />
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="populer" value="Ya" <?php echo set_value('populer', $destinasi->populer) == 'Ya' ? "checked" : ""; ?>>
                                    <span class="form-radio-sign">Ya</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="populer" value="Tidak" <?php echo set_value('populer', $destinasi->populer) == 'Tidak' ? "checked" : ""; ?>>
                                    <span class="form-radio-sign">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>