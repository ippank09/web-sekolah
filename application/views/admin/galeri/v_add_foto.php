<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Foto Galeri
        </div>
        <div class="panel-body">

            <?php
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $error_upload . '</div>';
            }

            if ($this->session->flashdata('pesan')) {
                echo  '<div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }    
            echo form_open_multipart('galeri/add_foto/'. $galeri->id_galeri);
            ?>

            <div class="col-sm-6">
            <div class="form-group">
                <label for="">Keterangan Foto</label>
                <input type="text" class="form-control" name="ket_foto" required>
            </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
            
            <div class="form-group">
                <button class="btn btn-success" type="submit">Simpan</button>
               <a href="<?= base_url('galeri'); ?>" class="btn btn-warning">Kembali</a>
                <button class="btn btn-primary" type="reset">Reset</button>
            </div>
           

            <?php echo form_close(); ?>

            <hr>

            <?php foreach ($foto as $key => $value) { ?>
               
            <div class="col-sm-3 text-center">
                <label for=""><?= $value->ket_foto?></label>
                <img src="<?= base_url('foto/'). $value->foto ?>" height="200" width="200" alt="">
                <br>
                <a href="" class="btn btn-danger btn-danger btn-xs center"><i class="fa fa-trash"></i></a>
            </div>
            <?php  }  ?>
        </div>
    </div>
</div>