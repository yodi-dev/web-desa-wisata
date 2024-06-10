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
                                <select class="form-control" name="status" id="destinasi">
                                    <option <?php if ($pesanan->status == "Belum Lunas") echo 'selected' ?> value="Belum Lunas">Belum Lunas</option>
                                    <option value="Lunas" <?php if ($pesanan->status == "Lunas") echo 'selected' ?>>Lunas</option>
                                    <option value="Selesai" <?php if ($pesanan->status == "Selesai") echo 'selected' ?>>Selesai</option>
                                </select>
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