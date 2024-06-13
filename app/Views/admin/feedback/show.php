<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pesan</div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-1 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $feedback->nama ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-1 col-form-label">Pesan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $feedback->pesan ?>">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-sm btn-dark" href="<?= base_url('feedback') ?>">kembali</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>