<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add
        </div>
        <div class="panel-body">

            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

            
            echo form_open_multipart('guru/add');
            ?>

            <div class="form-group">
                <label for="">Nip</label>
                <input type="text" class="form-control" name="nip" required>
            </div>

            <div class="form-group">
                <label for="">Nama Guru</label>
                <input type="text" class="form-control" name="nama_guru" required>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Mata Pelajaran</label>
                    <select name="id_mapel" class="form-control" id="">
                        <option value="">--Pilih Mata Pelajaran--</option>
                    <?php foreach ($mapel as $key => $value) { ?> 
                        <option value="<?= $value->id_mapel; ?>"><?= $value->nama_mapel; ?></option>
                    <?php } ?>    
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Pendidikan</label>
                    <select name="pendidikan" class="form-control" id="">
                        <option value="">--Pendidikan--</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </div>
            </div>

                <div class="form-group">
                    <label for="">Foto Guru</label>
                    <input type="file" class="form-control" name="foto">
                </div>

            <div class="form-group">
                <button type="submit">Simpan</button>
                <button type="reset">Reset</button>
            </div>

            <?php echo form_close(); ?>

        </div>
    </div>
</div>