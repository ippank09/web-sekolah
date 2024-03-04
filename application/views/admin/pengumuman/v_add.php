<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add
        </div>
        <div class="panel-body">

            <?php
            
            echo form_open_multipart('pengumuman/add');
            ?>

            <div class="col-md-8 form-group">
                <label for="">Judul Pengumuman</label>
                <input type="text" class="form-control" name="judul_pengumuman" required>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Isi Pengumuman</label>
                    <textarea name="isi_pengumuman" id="" cols="100" rows="10"></textarea>
                </div>
            </div>

            <div class="col-md-8 form-group">
                <button class="btn btn-success" type="submit">Simpan</button>
                <button class="btn btn-primary" type="reset">Reset</button>
            </div>

            <?php echo form_close(); ?>

        </div>
    </div>
</div>