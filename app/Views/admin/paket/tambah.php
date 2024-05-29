<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Paket</div>
                        </div>
                        <?= form_open_multipart(base_url('admin/simpan_paket')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_paket">Nama Paket</label>
                                <input type="text" name="nama_paket" class="form-control" id="nama_paket" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" class="form-control" id="harga">
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