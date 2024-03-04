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


            echo form_open_multipart('berita/add');
            ?>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" class="form-control" name="judul_berita" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Isi Berita</label>
                    <textarea name="isi_berita" id="editor"></textarea>
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Gambar berita</label>
                    <input type="file" class="form-control" name="gambar_berita">
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