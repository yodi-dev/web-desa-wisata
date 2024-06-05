<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Galeri</div>
                        </div>
                        <?= form_open_multipart(base_url('galeri/simpan')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul Gambar</label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
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