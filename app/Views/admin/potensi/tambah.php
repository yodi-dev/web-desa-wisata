<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Potensi</div>
                        </div>
                        <?= form_open_multipart(base_url('potensi/simpan')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_potensi">Potensi</label>
                                <input type="text" name="nama_potensi" class="form-control" id="nama_potensi" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="">
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