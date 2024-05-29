<div class="main-panel">
    <div class="content content-full">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Galeri</div>
                        </div>
                        <?= form_open_multipart(base_url('galeri/aksi_edit')); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Nama Wisata</label>
                                <input type="hidden" name="id" value="<?= $galeri->id ?>">
                                <input type="text" name="judul" class="form-control" id="judul" value="<?= $galeri->judul ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <br>
                                <?php
                                if (!empty($galeri->gambar)) {
                                    echo '<img src="' . base_url("assets/img/upload/$galeri->gambar") . '" width="150">';
                                }
                                ?>
                                <input type="file" name="gambar" class="form-control-file mt-1" id="exampleFormControlFile1">
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