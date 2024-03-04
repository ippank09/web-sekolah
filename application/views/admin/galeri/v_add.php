<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add
        </div>
        <div class="panel-body">

            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('galeri/add');
            ?>

            <div class="form-group">
                <label for="">Nama Galeri</label>
                <input type="text" class="form-control" name="nama_galeri" required>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Sampul</label>
                    <input type="file" class="form-control" name="sampul">
                </div>
            </div>
            <div class="form-group">
                <button type="submit">Simpan</button>
                <button type="reset">Reset</button>
            </div>

            <?php echo form_close(); ?>

        </div>
    </div>
</div>