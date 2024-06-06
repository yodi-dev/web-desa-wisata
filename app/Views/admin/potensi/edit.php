<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit potensi</div>
                        </div>
                        <?= form_open_multipart(base_url('potensi/aksi_edit')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_potensi">Potensi</label>
                                <input type="hidden" name="id" value="<?= $potensi->id ?>">
                                <input type="text" name="nama_potensi" class="form-control" id="nama_potensi" value="<?= $potensi->nama_potensi ?>">
                            </div>
                            <div class=" form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $potensi->deskripsi ?>">
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