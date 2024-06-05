<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Status</div>
                        </div>
                        <?= form_open_multipart(base_url('pesanan/aksi_edit')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="hidden" name="id" value="<?= $pesanan->id ?>">
                                <input type="text" name="status" class="form-control" id="status" value="<?= $pesanan->status ?>">
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