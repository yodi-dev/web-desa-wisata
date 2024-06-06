<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Destinasi</div>
                        </div>
                        <?= form_open_multipart(base_url('destinasi/simpan')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_wisata">Nama Wisata</label>
                                <input type="text" name="nama_wisata" class="form-control" id="nama_wisata" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="slug">Keterangan Singkat</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" class="form-control" id="harga" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-check">
                                <label>Populer</label><br />
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="populer" value="Ya">
                                    <span class="form-radio-sign">Ya</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="populer" value="Tidak" checked="">
                                    <span class="form-radio-sign">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>