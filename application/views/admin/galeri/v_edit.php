<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add
        </div>
        <div class="panel-body">

            <?php
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

            echo form_open_multipart('galeri/edit/' . $galeri->id_galeri);
            ?>

            <div class="form-group">
                <label for="">Nama Galeri</label>
                <input type="text" value="<?= $galeri->nama_galeri ?>" class="form-control" name="nama_galeri" required>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <img src="<?= base_url('galeri_foto/') . $galeri->sampul; ?>" height="100px" alt="">
                    <input type="file" class="form-control" name="sampul">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                </div>
            </div>

            <?php echo form_close(); ?>

        </div>
    </div>
</div>