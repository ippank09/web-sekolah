<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
           Edit
        </div>
        <div class="panel-body">

            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            echo form_open_multipart('siswa/edit/'.$siswa->id_siswa);
            ?>

            <div class="form-group">
                <label for="">Nis</label>
                <input type="text" value="<?= $siswa->nis; ?>" class="form-control" name="nis" required>
            </div>

            <div class="form-group">
                <label for="">Nama Siswa</label>
                <input type="text" value="<?= $siswa->nama_siswa; ?>" class="form-control" name="nama_siswa" required>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" value="<?= $siswa->tempat_lahir; ?>" class="form-control" name="tempat_lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" value="<?= $siswa->tgl_lahir; ?>" class="form-control" name="tgl_lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Kelas</label>
                    <select name="kelas" class="form-control" id="">
                        <option value="<?= $siswa->kelas; ?>"><?= $siswa->kelas; ?></option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>

                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <img src="<?= base_url('foto_siswa/'.$siswa->foto_siswa);  ?>" alt="" height="90px">
                    <input type="file" class="form-control" name="foto_siswa">
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